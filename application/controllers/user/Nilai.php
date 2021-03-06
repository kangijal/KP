<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Nilai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function semesterganjil()
	{
		$nik_siswa = $this->session->userdata('username');

		$data['kelas'] = $this->db->distinct();
		$data['kelas'] = $this->db->select('ruang_kelas.id as id, ruang_kelas.nama_ruangan as nama_ruangan')->from('nilai_siswa')->join('ruang_kelas','ruang_kelas.id=nilai_siswa.id_kelas')->where('nilai_siswa.nis',$nik_siswa)->get()->result();
		
		$kelas = $this->input->post('kelas',true);

		$data['nilai'] = $this->db->select('nilai_siswa.*,mapel.nama_mapel, ruang_kelas.nama_ruangan as nama_ruangan')->from('nilai_siswa')->join('ruang_kelas','ruang_kelas.id=nilai_siswa.id_kelas')->join('mapel','mapel.id=nilai_siswa.id_mapel')->where('nilai_siswa.id_kelas', $kelas)->like('nilai_siswa.nis',$nik_siswa)->get()->result();

		$this->load->view('user/nilai/ganjil/index',$data);
	}

	public function cetak()
	{
		$nik_siswa = $this->session->userdata('username');

		$data['nilai'] = $this->db->select('nilai_siswa.*,mapel.nama_mapel')->from('nilai_siswa')->join('mapel','mapel.kode_mapel=nilai_siswa.kode_mapel')->where('semester','Ganjil')->get()->result();

		$html = $this->load->view('user/nilai/ganjil/pdf',$data,true);

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