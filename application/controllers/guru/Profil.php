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
		$id = $this->session->userdata('username');

		$data['photo'] = $this->db->where('username',$id)->get('user')->row();
		$data['profil'] = $this->db->where('NIP',$id)->get('guru')->row();
		$this->load->view('guru/profil/index',$data);
	}
}