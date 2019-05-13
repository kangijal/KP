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

		$data['profil'] = $this->db->where('id',$id)->get('guru')->row();
		$this->load->view('guru/profil/index',$data);
	}
}