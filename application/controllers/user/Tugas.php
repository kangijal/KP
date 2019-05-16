<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Tugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
        $nis = $this->session->userdata('username');
        $kelas = $this->db->select('id_kelas')->from('siswa_has_kelas')->where('nis',$nis)->get()->row();
        $kelas_siswa = $kelas->id_kelas;
        
		$data['tugas'] = $this->db->select('tugas.*')->from('tugas')->where('tugas.id_kelas',$kelas_siswa)->get()->result();

        $this->load->view('user/tugas/index',$data);
	}
}