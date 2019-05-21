<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_data');
       
    }
    function index()
    {
        
        $data['pengumuman']=$this->M_data->GetPengumuman();
        $data['guru']=$this->M_data->Getjumlahguru();
        $data['siswa']=$this->M_data->Getjumlahsiswa();
        $data['ruang']=$this->M_data->Getjumlahruang();
         
    	$this->load->view('dasboard/header');
        $this->load->view('dasboard/home',$data);
        $this->load->view('dasboard/footer');
    }

    function tampil_beritadetail($id){
        $ks = $this->M_data->GetWhere('berita', array('id_berita' => $id));
        $data = array(
            'id_berita' => $ks[0]['id_berita'],
            'judul' => $ks[0]['judul'],
            'isi' => $ks[0]['isi'],
            'tanggal' => $ks[0]['tanggal'],
            'gambar' => $ks[0]['gambar']
            );
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/berita_detail',$data);
        $this->load->view('dasboard/footer');
    }
    function tampil_pengdetail($id){
        $ks = $this->M_data->GetWhere('pengumuman', array('id_pengumuman' => $id));
        $data = array(
            'id_pengumuman' => $ks[0]['id_pengumuman'],
            'judul' => $ks[0]['judul'],
            'isi' => $ks[0]['isi'],
            'tanggal' => $ks[0]['tanggal'],
            'gambar' => $ks[0]['gambar']
            );
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/peng_detail',$data);
        $this->load->view('dasboard/footer');
    }
}