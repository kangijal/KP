<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$nik = $this->session->userdata('username');

		$data['photo'] = $this->db->where('username',$nik)->get('user')->row();
		$data['profil'] = $this->db->where('nis',$nik)->get('siswa')->row();

		$this->load->view('user/profil/index',$data);
	}
}