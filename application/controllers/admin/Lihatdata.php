<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Lihatdata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		
	}

	public function index()
	{

	}

	// Menu Siswa ============================================================
	public function siswa()
	{
		$data['siswa'] = $this->db->select('siswa.*,ruang_kelas.nama_ruangan,')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->get()->result();

		$this->load->view('admin/lihatdata/siswa/index',$data);
	}

	public function editsiswa($nis)
	{
		$data['siswa'] = $this->db->where('nis',$nis)->get('siswa')->row();
		$data['kelas'] = $this->db->get('ruang_kelas')->result();

		$this->load->view('admin/lihatdata/siswa/edit',$data);
	}

	public function updatesiswa($nis)
	{
		$data['nis'] = $this->input->post('nis',true);
		$data['id_kelas'] = $this->input->post('id_kelas',true);
		$data['jk'] = $this->input->post('jk',true);
		$data['nama'] = $this->input->post('nama',true);
		// $data['thn_ajaran'] = $this->input->post('thn_ajaran',true);
		$data['alamat'] = $this->input->post('alamat',true);
		$data['nope'] = $this->input->post('nope',true);
		$data['ttl'] = $this->input->post('ttl',true);

		$nama = $this->input->post('nama',true);

		$this->db->where('nis',$nis)->update('siswa',$data);

		$this->session->set_flashdata('berhasil','Siswa dengan nama <b>'.$nama.'</b> berhasil di Update');

		redirect('admin/lihatdata/editsiswa/'.$nis);
	}

	public function destroysiswa($nis)
	{
		$this->db->where('nis',$nis)->delete('siswa');

		redirect('admin/lihatdata/siswa');
	}

	public function cetaksiswa()
	{


		ob_start();
		$data['siswa'] = $this->db->select('siswa.*,ruang_kelas.nama_ruangan')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->get()->result();
		$this->load->view('admin/lihatdata/siswa/cetak',$data);
		$html = ob_get_contents();
			ob_end_clean();
			
			require_once(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('laporan_siswa_'.date('Ymd').'.pdf');



		//$data['siswa'] = $this->db->select('siswa.*,ruang_kelas.nama_ruangan')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->get()->result();
		//$this->load->view('admin/lihatdata/siswa/cetak',$data);
		
		// $html = $this->load->view('admin/lihatdata/siswa/cAPPPATH."/third_party/html2pdf_4_03/html2pdf.class.php"etak',$data, true);

		// require();
		// try {
		// 	$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
		// 	$html2pdf->WriteHTML($html);
		// 	$html2pdf->Output('laporan_siswa_'.date('Ymd').'.pdf');
		// } catch (HTML2PDF_exception $e) {
        //     // echo $e;
		// 	$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
		// 	redirect('admin/lihat_data/siswa');
		// }
	} 

	public function guru()
	{
		$data['guru'] = $this->db->get('guru')->result();

		$this->load->view('admin/lihatdata/guru/index',$data);
	}

	public function editguru($id)
	{
		$data['guru'] = $this->db->where('NIP',$id)->get('guru')->row();

		$this->load->view('admin/lihatdata/guru/edit',$data);
	}

	public function updateguru($id)
	{
		// $data['NIP'] = $this->input->post('nip',true);
		$data['nama'] = $this->input->post('nama',true);
		// $nama = $this->input->post('nama',true);
		$data['alamat'] = $this->input->post('alamat',true);
		// $data['ttl'] = $this->input->post('ttl',true);
		// $data['jabatan'] = $this->input->post('jabatan',true);
		// $data['nope'] = $this->input->post('nope',true);
		// $data['jk'] = $this->input->post('jk',true);
		// $data['agama'] = $this->input->post('agama',true);
		// $data['alamat'] = $this->input->post('alamat',true);
		// $nama = $this->input->post('nama',true);

		$this->db->where('NIP',$id)->update('guru',$data);

		$this->session->set_flashdata('berhasil','Guru dengan nama '.$nama.' berhasil di Update');
		redirect('admin/lihatdata/editguru/'.$id);
	}

	public function destroyguru($id)
	{
		// $data['nama']= $this->db->select('nama')->from('guru')->where('id',$id);
		// $data['jk']= $this->db->select('jk')->from('guru')->where('id',$id);
		// $data['nope']= $this->db->select('nope')->from('guru')->where('id',$id);
		// $data['alamat']= $this->db->select('alamat')->from('guru')->where('id',$id);
		// $data['ket']= $this->input->post('ket',true);
		// $this->db->insert('guru',$data);

		$this->db->where('NIP',$id)->delete('guru');

		redirect('admin/lihatdata/guru');
	}

	public function cetakguru()
	{
		$data['guru'] = $this->db->get('guru')->result();

		$html = $this->load->view('admin/lihatdata/guru/cetak',$data, true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_guru_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            // echo $e;
			$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			redirect('admin/lihat_data/guru');
		}
	}

	public function kelas()
	{
		$data['kelas'] = $this->db->get('ruang_kelas')->result();

		$this->load->view('admin/lihatdata/kelas/index',$data);
	}

	public function editkelas($id)
	{
		$kelas = $this->db->where('id',$id)->get('ruang_kelas')->row();
		$kelas = $kelas->nama_ruangan;
		$data['kelas2'] = explode(' ', $kelas);

		$data['kelas'] = $this->db->where('id',$id)->get('ruang_kelas')->row();

		$this->load->view('admin/lihatdata/kelas/edit',$data);
	}

	public function updatekelas($id)
	{

		$data['nama_ruangan'] = $this->input->post('nama1',true);
		$data['jumlah_siswa'] = $this->input->post('jumlah_siswa',true);

		$this->db->where('id',$id)->update('ruang_kelas',$data);

		$this->session->set_flashdata('berhasil', 'Ruang kelas berhasil di update');
		redirect('admin/lihatdata/editkelas/'.$id);
	}

	public function destroykelas($id)
	{
		$this->db->where('id',$id)->delete('ruang_kelas');

		redirect('admin/lihatdata/kelas');
	}

	public function cetakkelas()
	{
		$data['kelas'] = $this->db->get('ruang_kelas')->result();

		$html = $this->load->view('admin/lihatdata/kelas/cetak',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_kelas_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            // echo $e;
			$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			redirect('admin/lihatdata/kelas');
		}
	}

	public function mapel()
	{
		$data['mapel'] = $this->db->get('mapel')->result();

		$this->load->view('admin/lihatdata/mapel/index',$data);
	}

	public function editmapel($kode_mapel)
	{
		$data['mapel'] = $this->db->where('id',$kode_mapel)->get('mapel')->row();

		$this->load->view('admin/lihatdata/mapel/edit',$data);
	}

	public function updatemapel($kode_mapel)
	{
		// $data['kode_mapel'] = $this->input->post('kode_mapel',true);
		$data['nama_mapel'] = $this->input->post('nama_mapel',true);
		$nama = $this->input->post('nama_mapel',true);

		$this->db->where('id',$kode_mapel)->update('mapel',$data);

		$this->session->set_flashdata('berhasil','Mata pelajaran '.$nama.' berhasil di update');
		redirect('admin/lihatdata/editmapel/'.$kode_mapel);
	}

	public function destroymapel($kode_mapel)
	{
		$this->db->where('id',$kode_mapel)->delete('mapel');

		redirect('admin/lihatdata/mapel');
	}

	public function cetakmapel()
	{
		$data['mapel'] = $this->db->get('mapel')->result();

		$html = $this->load->view('admin/lihatdata/mapel/cetak',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_kelas_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            // echo $e;
			$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			redirect('admin/lihatdata/mapel');
		}
	}

	public function wali()
	{
		$data['wali'] = $this->db->select('wali_kelas.*,guru.nama as nama, ruang_kelas.nama_ruangan')->from('wali_kelas')->join("guru", "guru.NIP=wali_kelas.id_guru")->join("ruang_kelas", "ruang_kelas.id=wali_kelas.id_kelas")->get()->result();

		$this->load->view('admin/lihatdata/wali/index',$data);
	}

	public function editwali($id)
	{
		$data['wali'] = $this->db->where('id',$id)->get('wali_kelas')->row();
		$data['siswa'] = $this->db->get('siswa')->result();

		$this->load->view('admin/lihatdata/wali/edit',$data);
	}

	public function updatewali($id)
	{
		$data['nama'] = $this->input->post('nama',true);
		$data['nik'] = $this->input->post('nik',true);
		$nama = $this->input->post('nama',true);

		$this->db->where('id',$id)->update('wali_keals',$data);

		$this->session->set_flashdata('berhasil','Wali dengan nama <b>'.$nama.'</b> berhasil di Update');
		redirect('admin/lihatdata/editwali/'.$id);
	}

	public function destroywali($id)
	{
		$this->db->where('id',$id)->delete('wali_kelas');

		redirect('admin/lihatdata/wali');
	}

	public function cetakwali()
	{
		$data['wali'] = $this->db->select('wali_kelas.*,guru.nama,ruang_kelas.nama_ruangan')->from('wali_kelas')->join('guru','guru.NIP=wali_kelas.NIP','INNER')->join('ruang_kelas','ruang_kelas.id=wali_kelas.id_kelas','INNER')->get()->result();

		$html = $this->load->view('admin/lihatdata/wali/cetak',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_kelas_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            // echo $e;
			$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			redirect('admin/lihatdata/lihatwalikelas');
		}
	}

	public function lihatwalikelas()
	{
		$data['wali'] = $this->db->select('wali_kelas.*,guru.nama,ruang_kelas.nama_ruangan')->from('wali_kelas')->join('guru','guru.NIP=wali_kelas.id_guru','INNER')->join('ruang_kelas','ruang_kelas.id=wali_kelas.id_kelas','INNER')->get()->result();

		$this->load->view('admin/lihatdata/wali/index',$data);
	}

	// Menu Ekskul.....................
	// Menampilkan semua data ekskul
	public function ekskul()
	{
		$data['ekskul'] = $this->db->get('ekskul')->result();

		$this->load->view('admin/lihatdata/ekskul/index',$data);
	}

	public function editekskul($id)
	{
		$data['ekskul'] = $this->db->where('id',$id)->get('ekskul')->row();

		$this->load->view('admin/lihatdata/ekskul/edit',$data);
	}

	public function updateekskul($id)
	{
		$data['nama'] = $this->input->post('ekskul',true);

		$this->db->where('id',$id)->update('ekskul',$data);

		$this->session->set_flashdata('berhasil','Data berhasil di Update');
		redirect('admin/lihatdata/editekskul/'.$id);
	}

	public function destroyekskul($id)
	{
		$this->db->where('id',$id)->delete('ekskul');

		redirect('admin/lihatdata/ekskul');
	}

	public function cetakekskul()
	{
		$data['ekskul'] = $this->db->get('ekskul')->result();

		$html = $this->load->view('admin/lihatdata/ekskul/cetak',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_ekskul_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            // echo $e;
			$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			redirect('admin/lihatdata/ekskul');
		}
	}
}