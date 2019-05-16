<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Naikkelas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function index()
	{
		$data['kelas'] = $this->db->get('ruang_kelas')->result();

        $kelas = $this->input->post('kelas',true);
        $th_masuk = $this->input->post('th_masuk',true);
        
        $data['siswa']= $this->db->select('siswa.*, ruang_kelas.nama_ruangan as kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->where('siswa.id_kelas',$kelas)->like('th_masuk',$th_masuk)->get()->result();
        $stat = $this->db->select('status')->from('ruang_kelas')->where('ruang_kelas.id',$kelas)->get()->row();
        $id = $stat->status;
        $data['naik']= $this->db->select('*')->from('ruang_kelas')->where('ruang_kelas.status',$id+1)->get()->result();
        $this->load->view('admin/naikkelas/index',$data);
         
    }
    public function kelas1()
	{
        $data['siswa']= $this->db->select('siswa.*, ruang_kelas.nama_ruangan as kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->where('ruang_kelas.status',1)->get()->result();
        $stat = $this->db->select('status')->from('ruang_kelas')->where('ruang_kelas.id',1)->get()->row();
        $id = $stat->status;
        $data['naik']= $this->db->select('*')->from('ruang_kelas')->where('ruang_kelas.status',$id+1)->get()->result();
        
        $this->load->view('admin/naikkelas/kelas1',$data);
    }
    public function kelas2()
	{
        $data['siswa']= $this->db->select('siswa.*, ruang_kelas.nama_ruangan as kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->where('ruang_kelas.status',2)->get()->result();
        $stat = $this->db->select('status')->from('ruang_kelas')->where('ruang_kelas.id',3)->get()->row();
        $id = $stat->status;
        $data['naik']= $this->db->select('*')->from('ruang_kelas')->where('ruang_kelas.status',$id+1)->get()->result();
        
        $this->load->view('admin/naikkelas/kelas2',$data);
    }
    public function kelas3()
	{
        $data['siswa']= $this->db->select('siswa.*, ruang_kelas.nama_ruangan as kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->where('ruang_kelas.status',3)->get()->result();
        $stat = $this->db->select('status')->from('ruang_kelas')->where('ruang_kelas.id',5)->get()->row();
        $id = $stat->status;
        $data['naik']= $this->db->select('*')->from('ruang_kelas')->where('ruang_kelas.status',$id+1)->get()->result();
        
        $this->load->view('admin/naikkelas/kelas3',$data);
    }
    public function kelas4()
	{
        $data['siswa']= $this->db->select('siswa.*, ruang_kelas.nama_ruangan as kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->where('ruang_kelas.status',4)->get()->result();
        $stat = $this->db->select('status')->from('ruang_kelas')->where('ruang_kelas.id',7)->get()->row();
        $id = $stat->status;
        $data['naik']= $this->db->select('*')->from('ruang_kelas')->where('ruang_kelas.status',$id+1)->get()->result();
        
        $this->load->view('admin/naikkelas/kelas4',$data);
    }
    public function kelas5()
	{
        $data['siswa']= $this->db->select('siswa.*, ruang_kelas.nama_ruangan as kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->where('ruang_kelas.status',5)->get()->result();
        $stat = $this->db->select('status')->from('ruang_kelas')->where('ruang_kelas.id',9)->get()->row();
        $id = $stat->status;
        $data['naik']= $this->db->select('*')->from('ruang_kelas')->where('ruang_kelas.status',$id+1)->get()->result();
        
        $this->load->view('admin/naikkelas/kelas5',$data);
    }
    public function kelas6()
	{
        $data['siswa']= $this->db->select('siswa.*, ruang_kelas.nama_ruangan as kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->where('ruang_kelas.status',6)->get()->result();
        $stat = $this->db->select('status')->from('ruang_kelas')->where('ruang_kelas.id',11)->get()->row();
        $id = $stat->status;
        $data['naik']= $this->db->select('*')->from('ruang_kelas')->where('ruang_kelas.status',$id+1)->get()->result();
        
        $this->load->view('admin/naikkelas/kelas6',$data);
    }

    public function naikkelas(){
        
    }
}