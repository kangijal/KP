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

		$this->load->view('admin/akademik/jadwal/index',$data);
	}

	public function carijadwalkelas()
	{
		$kelas = $this->input->post('kelas',true);

		$data['senin'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','1')->like('ruang_kelas.id',$kelas)->get()->result();

		$data['selasa'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','2')->like('ruang_kelas.id',$kelas)->get()->result();

		$data['rabu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','3')->like('ruang_kelas.id',$kelas)->get()->result();

		$data['kamis'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','4')->like('ruang_kelas.id',$kelas)->get()->result();

		$data['jumat'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','5')->like('ruang_kelas.id',$kelas)->get()->result();

		$data['sabtu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','6')->like('ruang_kelas.id',$kelas)->get()->result();

		$this->load->view('admin/akademik/carijadwal/kelas',$data);
	}

	public function editjadwal($id)
	{
		$data['jadwal'] = $this->db->select('jadwal_pelajaran.*, ruang_kelas.nama_ruangan, mapel.nama_mapel, guru.nama')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->join('guru','guru.NIP=jadwal_pelajaran.nip')->where('jadwal_pelajaran.id',$id)->get()->row();
		$data['kelas'] = $this->db->get('ruang_kelas')->result();
		$data['mapel'] = $this->db->get('mapel')->result();

		$this->load->view('admin/akademik/jadwal/edit',$data);
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
}