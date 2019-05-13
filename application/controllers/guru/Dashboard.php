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
		$this->load->view('guru/beranda');
	}
}