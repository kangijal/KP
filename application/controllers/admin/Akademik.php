<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Akademik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{

	}

	public function jadwal()
	{
		$data['kelas'] = $this->db->get('ruang_kelas')->result();

		$kelas = $this->input->post('kelas',true);

		$data['senin'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('ruang_kelas.id',$kelas)->like('hari','1')->get()->result();

		$data['selasa'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('ruang_kelas.id',$kelas)->like('hari','2')->get()->result();

		$data['rabu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('ruang_kelas.id',$kelas)->like('hari','3')->get()->result();

		$data['kamis'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('ruang_kelas.id',$kelas)->like('hari','4')->get()->result();

		$data['jumat'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('ruang_kelas.id',$kelas)->like('hari','5')->get()->result();

		$data['sabtu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('ruang_kelas.id',$kelas)->like('hari','6')->get()->result();


		$this->load->view('admin/akademik/jadwal/index',$data);
	}

	// public function carijadwalkelas()
	// {
	// 	$kelas = $this->input->post('kelas',true);

	// 	$data['senin'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','1')->like('ruang_kelas.id',$kelas)->get()->result();

	// 	$data['selasa'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','2')->like('ruang_kelas.id',$kelas)->get()->result();

	// 	$data['rabu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','3')->like('ruang_kelas.id',$kelas)->get()->result();

	// 	$data['kamis'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','4')->like('ruang_kelas.id',$kelas)->get()->result();

	// 	$data['jumat'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','5')->like('ruang_kelas.id',$kelas)->get()->result();

	// 	$data['sabtu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','6')->like('ruang_kelas.id',$kelas)->get()->result();

	// 	$this->load->view('admin/akademik/carijadwal/kelas',$data);
	// }

	public function editjadwal($id)
	{
		$data['jadwal'] = $this->db->select("mapel.nama_mapel as nur, mapel.id as fatimah, hari.hari as ratih, jam.waktu as alvri, jadwal_pelajaran.*")
		->from("jadwal_pelajaran")
		->join("mapel", "mapel.id=jadwal_pelajaran.id_mapel")
		->join("hari", "hari.id=jadwal_pelajaran.hari")
		->join("jam", "jam.id=jadwal_pelajaran.jam")
		->where("jadwal_pelajaran.id", $id)
		->get()->result_array();

		$data['mapel'] = $this->db->select("*")
		->from("mapel")
		->get()->result_array();

		$this->load->view('admin/akademik/jadwal/ratih', $data);
	}

	public function tambahjadwal()
	{
		$data['kelas'] = $this->db->select("*")
		->from("ruang_kelas")
		->get()->result_array();

		$data['mapel'] = $this->db->select("*")
		->from("mapel")
		->get()->result_array();

		$data['hari'] = $this->db->select("*")
		->from("hari")
		->get()->result_array();

		$data['jam'] = $this->db->select("*")
		->from("jam")
		->get()->result_array();

		$this->load->view('admin/akademik/jadwal/tambah', $data);
	}

	public function tambahjadwalsimpan()
	{
		$method = $_SERVER["REQUEST_METHOD"];
        if (
			$method === "POST"
			&& !empty($this->input->post("kelas")) && is_numeric($this->input->post("kelas")) === TRUE
			&& !empty($this->input->post("mapel")) && is_numeric($this->input->post("mapel")) === TRUE
			&& !empty($this->input->post("hari")) && is_numeric($this->input->post("hari")) === TRUE
			&& !empty($this->input->post("jam")) && is_numeric($this->input->post("jam")) === TRUE
		) {	
			$query = $this->db->insert("jadwal_pelajaran",
            array(
                "id_kelas" => $this->input->post("kelas"),
                "id_mapel" => $this->input->post("mapel"),
                "hari" => $this->input->post("hari"),
                "jam" => $this->input->post("jam"),
                "nip" => ""
            )
        );
            
            if ($query) {
				redirect('admin/akademik/jadwal');
			} else {
				redirect('admin/akademik/editjadwal/'.$id);
			}
		} else {
			echo "made with love ratih";
		}
	}

	public function simpanjadwal() {
		$method = $_SERVER["REQUEST_METHOD"];
        if (
			$method === "POST"
			&& !empty($this->input->post("id")) && is_numeric($this->input->post("id")) === TRUE
			&& !empty($this->input->post("mapel")) && is_numeric($this->input->post("mapel")) === TRUE
		) {	
			$query = $this->db->where("id", $this->input->post("id"))->update("jadwal_pelajaran",
				array(
					"id_mapel" => $this->input->post("mapel")
				)
        	);
            
            if ($query) {
				redirect('admin/akademik/jadwal');
			} else {
				redirect('admin/akademik/editjadwal/'.$id);
			}
		} else {
			echo "made with love ratih";
		}
	}

	public function storejadwal()
	{
		do{
			$id = random_string('alnum',15);
			$cek = $this->db->where('id',$id)->get('jadwal_pelajaran')->result();
			$cek_id = count($cek);
		}while($cek_id > 0);

		$data['jam_awal'] = $this->input->post('jam_awal',true);
		$data['menit_awal'] = $this->input->post('menit_awal',true);
		$data['jam_akhir'] = $this->input->post('jam_akhir',true);
		$data['menit_akhir'] = $this->input->post('menit_akhir',true);

		$data['id'] = $id;
		$data['id_kelas'] = $this->input->post('id_kelas',true);
		$data['kode_mapel'] = $this->input->post('kode_mapel',true);
		$data['hari'] = $this->input->post('hari',true);
		$data['nip'] = $this->input->post('nip',true);

		$this->db->insert('jadwal_pelajaran',$data);

		$this->session->set_flashdata('berhasil','<b>Jadwal Berhasil Ditambahkan</b>');
		redirect('admin/akademik/createjadwal');
	}

	public function updatejadwal($id)
	{
		$data['jam_awal'] = $this->input->post('jam_awal',true);
		$data['menit_awal'] = $this->input->post('menit_awal',true);
		$data['jam_akhir'] = $this->input->post('jam_akhir',true);
		$data['menit_akhir'] = $this->input->post('menit_akhir',true);

		$data['id_kelas'] = $this->input->post('id_kelas',true);
		$data['kode_mapel'] = $this->input->post('kode_mapel',true);
		$data['hari'] = $this->input->post('hari',true);
		$data['nip'] = $this->input->post('nip',true);

		$this->db->where('id',$id)->update('jadwal_pelajaran',$data);

		$this->session->set_flashdata('berhasil','<b>Jadwal Berhasil Diupdate</b>');
		redirect('admin/akademik/editjadwal/'.$id);
	}

	public function presensi()
	{
		$data['kelas'] = $this->db->get('presensi')->result();

		$this->load->view('admin/akademik/presensi/index',$data);
	}
}