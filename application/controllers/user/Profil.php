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
		$data['wali'] = $this->db->where('nis',$nik)->get('profil_siswa')->row();

		$this->load->view('user/profil/index',$data);
	}

	public function editprofil($nis)
	{
		$data['alamat'] = $this->input->post('alamat',true);
		$data['nope'] = $this->input->post('nope',true);
		// $data['ttl'] = $this->input->post('ttl',true);

		$this->db->where('nis',$nis)->update('siswa',$data);

		$data2['ayah'] = $this->input->post('ayah',true);
		$data2['ibu'] = $this->input->post('ibu',true);
		$data2['p_ayah'] = $this->input->post('p_ayah',true);
		$data2['p_ibu'] = $this->input->post('p_ibu',true);
		$data2['g_ayah'] = $this->input->post('g_ayah',true);
		$data2['g_ibu'] = $this->input->post('g_ibu',true);
		$data2['pend_ayah'] = $this->input->post('pend_ayah',true);
		$data2['pend_ibu'] = $this->input->post('pend_ibu',true);

		$this->db->where('nis',$nis)->update('profil_siswa',$data2);

		$this->session->set_flashdata('berhasil','Data berhasil di Update');

		redirect('user/profil/index/'.$nis);
	}
}