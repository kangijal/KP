<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Tugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}

	public function index()
	{
		$this->load->view('guru/tugas/index');
	}

	public function tambah()
	{
		
		$config['upload_path']          = './assets/img/upload/';
		$config['allowed_types']        = 'JPG|PNG|jpg|png|JPEG|jpeg';
		$config['max_size']             = 0;
		$config['max_width']            = 12800;
		$config['max_height']           = 9600;
		$config['remove_spaces'] = FALSE;
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('photo')){
			echo $this->upload->display_errors();

		}
		 else{
		    $data = $this->upload->data();  
		    $config['image_library'] = 'gd2';  
		    $config['source_image'] = './assets/img/upload/'.$data["file_name"];  
		    $config['create_thumb'] = FALSE;  
		    $config['maintain_ratio'] = TRUE;  
		    $config['quality'] = '60%';
		    $config['width'] = 200;
			$config['height'] = 200;
		    $config['new_image'] = './assets/img/upload/'.$data["file_name"];  
		    $this->load->library('image_lib', $config);  
		    $this->image_lib->resize(); 
			$upload = array('upload_data' => $this->upload->data());
			$nip = $this->session->userdata('username');
			$kelas = $this->db->select('wali_kelas.id_kelas, ruang_kelas.nama_ruangan, ruang_kelas.id as id_kelas')->from('wali_kelas')->join('ruang_kelas','ruang_kelas.id=wali_kelas.id_kelas')->where('wali_kelas.id_guru',$nip)->get()->row();
			$kelas_guru = $kelas->id_kelas;
			$file=$this->upload->data();
			$data=array(
				'deskripsi'=>$this->input->post('deskripsi'),
				'photo'=>$file['file_name'],
				'id_kelas'=>$kelas_guru,
			);
			$this->M_data->insert('tugas',$data);
			$this->session->set_flashdata('status','Berhasil, Tugas baru telah ditambahkan');
        redirect('guru/tugas/index');
	}
}
}