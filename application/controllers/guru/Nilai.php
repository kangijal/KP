<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Nilai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$nik = $this->session->userdata('username');
		$id_kelas = $this->db->where('id_guru',$nik)->get('wali_kelas')->row();

		$kelas = $this->db->select('wali_kelas.id_kelas, ruang_kelas.nama_ruangan, ruang_kelas.id as id_kelas')->from('wali_kelas')->join('ruang_kelas','ruang_kelas.id=wali_kelas.id_kelas')->get()->row();
		$kelas_guru = $kelas->id_kelas;
		$data['siswa'] = $this->db->select('*')->from('siswa')->where('id_kelas',$kelas_guru)->get()->result();
		$data['mapel'] = $this->db->get('mapel')->result();

		$this->load->view('guru/nilai/create',$data);
	}

	public function store()
	{
		do{
			// $id = random_string('alnum',15);
			$id=0;
			$cek = $this->db->where('id',$id)->get('jadwal_pelajaran')->result();
			$cek_id = count($cek);
		}while($cek_id > 0);
		$data['id'] = $this->input->post('id',true);
		// $data['id'] = $id;
		$data['nis'] = $this->input->post('nik_siswa',true);
		$data['id_kelas'] = 1;
		$data['id_mapel'] = $this->input->post('mapel',true);
		$data['semester'] = $this->input->post('semester',true);
		// $data['thn_ajaran'] = $this->input->post('thn_ajaran',true);
		// $data['tugas'] = $this->input->post('tugas',true);
		$data['uas'] = $this->input->post('uas',true);
		$data['uts'] = $this->input->post('uts',true);

		$tugas = $this->input->post('tugas',true);
		$uts = $this->input->post('uts',true);
		$uas = $this->input->post('uas',true);
		// $data['rata'] = ($tugas + $uts + $uas) / 3;

		$this->db->insert('nilai_siswa',$data);
		$this->session->set_flashdata('berhasil','Nilai berhasil di input');
		redirect('guru/nilai');
	}

	public function lihat_nilai()
	{
		$nik = $this->session->userdata('username');
		$id_kelas = $this->db->where('id_guru',$nik)->get('wali_kelas')->row();

		$kelas = $this->db->select('wali_kelas.id_kelas, ruang_kelas.nama_ruangan, ruang_kelas.id as id_kelas')->from('wali_kelas')->join('ruang_kelas','ruang_kelas.id=wali_kelas.id_kelas')->get()->row();
		$kelas_guru = $kelas->id_kelas;

		$data['nilai'] = $this->db->select('nilai_siswa.*, mapel.nama_mapel, ruang_kelas.nama_ruangan, siswa.nama')->from('nilai_siswa')->join('mapel','mapel.id=nilai_siswa.id_mapel')->join('siswa','siswa.nis=nilai_siswa.nis')->join('ruang_kelas','ruang_kelas.id=nilai_siswa.id_kelas')->where('nilai_siswa.id_kelas',$kelas_guru)->get()->result();
		$this->load->view('guru/nilai/index',$data);
	}

	public function destroy($id)
	{
		$this->db->where('id',$id)->delete('nilai_siswa');
		$this->session->set_flashdata('berhasil','Nilai berhasil di hapus');
		redirect('guru/nilai/lihat_nilai');
	}

	public function cetak()
	{
		$data['nilai'] = $this->db->select('nilai_siswa.*,siswa.nama,mapel.nama_mapel')->from('nilai_siswa')->join('siswa','siswa.nik=nilai_siswa.nik_siswa','INNER')->join('mapel','mapel.kode_mapel=nilai_siswa.kode_mapel')->get()->result();

		$html = $this->load->view('guru/nilai/pdf',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_nilai_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            // echo $e;
			$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			redirect('guru/nilai/lihat_nilai');
		}
	}

	// public function create_ekskul()
	// {
	// 	$data['siswa'] = $this->db->get('siswa')->result();
	// 	$data['ekskul'] = $this->db->get('ekskul')->result();

	// 	$this->load->view('guru/nilai/ekskul',$data);
	// }

	// public function store_ekskul()
	// {
	// 	$data['nik_siswa'] = $this->input->post('nik_siswa',true);
	// 	$data['nama'] = $this->input->post('nama',true);
	// 	$data['nilai'] = $this->input->post('nilai',true);

	// 	$this->db->insert('nilai_ekskul',$data);
	// 	$this->session->set_flashdata('berhasil','Nilai berhasil di input');
	// 	redirect('guru/nilai/create_ekskul');
	// }

	public function cetak2()
	{
		$data['nilai'] = $this->db->select('nilai_siswa.*,siswa.nama,mapel.nama_mapel')->from('nilai_siswa')->join('siswa','siswa.nik=nilai_siswa.nik_siswa','INNER')->join('mapel','mapel.kode_mapel=nilai_siswa.kode_mapel')->get()->result();

		$html = $this->load->view('guru/nilai/pdf',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('L', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_nilai_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            echo $e;
			// $this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			// redirect('guru/nilai/lihat_nilai');
		}
	}
}