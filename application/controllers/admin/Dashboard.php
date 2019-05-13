<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function index()
	{
		$siswa = $this->db->get('siswa')->result();
		$data['total_siswa'] = count($siswa);
		$guru = $this->db->get('guru')->result();
		$data['total_guru'] = count($guru);
		$kelas = $this->db->get('ruang_kelas')->result();
		$data['total_kelas'] = count($kelas);
		$mapel = $this->db->get('mapel')->result();
		$data['total_mapel'] = count($mapel);

		$this->load->view('admin/beranda',$data);
	}
}