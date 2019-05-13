<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Siswa_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function store($data)
	{
		$this->db->insert('siswa',$data);
	}
}