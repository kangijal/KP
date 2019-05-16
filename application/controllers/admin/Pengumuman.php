<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		
	}

	public function index()
	{

	}

public function tampil_peng(){
		$data['pengumuman']=$this->M_data->GetData('pengumuman');
		
		$this->load->view('admin/pengumuman/v_datapeng',$data);
	}

	public function tambah_peng(){
		
		$this->load->view('admin/pengumuman/tambah_peng');
	}

	public function tambah_aksi_peng(){

		// $config=[
		// 	'upload_path'=> './assets/img',
		// 	'allowed_types'=>'jpg|png',
		// 	'max_size'=>1000,
		// 	'max_width'=>1000,
		// 	'max_height'=>1000
		// 	];
		$config['upload_path']          = './assets/img/upload/';
		$config['allowed_types']        = 'JPG|PNG|jpg|png|JPEG|jpeg';
		$config['max_size']             = 0;
		$config['max_width']            = 12800;
		$config['max_height']           = 9600;
		$config['remove_spaces'] = FALSE;
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
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
	        $tgl=$this->input->post('tgl');
	        $tgl= date('Y-m-d', strtotime($tgl));
			$file=$this->upload->data();
			$data=array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('isi'),
				'gambar'=>$file['file_name'],
				'tanggal'=>$tgl,
			);
			$this->M_data->insert('pengumuman',$data);
			$this->session->set_flashdata('status','Berhasil, Pengumuman baru telah ditambahkan');
<<<<<<< HEAD
        redirect('admin/pengumuman/tambah_peng');
=======
        redirect('admin/pengumuman/tampil_peng');
>>>>>>> a62d123d4fa1eb8904c299919e370a5599a20953
    }

}
	 public function delete_peng($id){
        $id = array('id_pengumuman' => $id);
<<<<<<< HEAD
        $this->load->model('m_data');
        $this->m_data->Delete('pengumuman', $id);
        redirect('admin/pengumuman/v_datapeng');
=======
        $this->load->model('M_data');
        $this->M_data->Delete('pengumuman', $id);
        redirect('admin/pengumuman/tampil_peng');
>>>>>>> a62d123d4fa1eb8904c299919e370a5599a20953
    }
    public function edit_peng($id){
		
    	$this->load->model('M_data');
        $ks = $this->M_data->GetWhere('pengumuman', array('id_pengumuman' => $id));
        $data = array(
        	'id_pengumuman'=> $ks[0]['id_pengumuman'],
            'judul' => $ks[0]['judul'],
            'isi' => $ks[0]['isi'],
            'gambar' => $ks[0]['gambar'],
            'tanggal' => $ks[0]['tanggal'],
			);
			
		$this->load->view('admin/pengumuman/edit_peng',$data);
	}
	
    public function edit_aksi_peng(){
    	$id=$this->input->post('id_pengumuman');
    	$tgl=$this->input->post('tgl');
	        $tgl= date('Y-m-d', strtotime($tgl));
    	if (basename($_FILES["foto"]["name"])!=null) {
		    $config['upload_path']          = './assets/img/upload/';
			$config['allowed_types']        = 'JPG|PNG|jpg|png|JPEG|jpeg';
			$config['max_size']             = 0;
			$config['max_width']            = 12800;
			$config['max_height']           = 9600;
			$config['remove_spaces'] = FALSE;
			if(!$this->upload->do_upload())	
			{
				$error=array('error'=>$this->upload->display_errors());
			}	
			else{
				
				$this->M_data->delete_foto_peng($id);
				
				$data = $this->upload->data(); 
				$config['image_library'] = 'gd2';  
		        $config['source_image'] = './assets/img/upload/'.$data["file_name"];  
		        $config['create_thumb'] = FALSE;  
		        $config['maintain_ratio'] = TRUE;
		        $config['width'] = 200;
		        $config['height'] = 200;  
		        $config['quality'] = '60%';
		        $config['new_image'] = './assets/img/logo/'.$data["file_name"];  
		        $this->load->library('image_lib', $config);  
		        $this->image_lib->resize(); 

		        $upload = array('upload_data' => $this->upload->data());
				$data=array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('isi'),
				'gambar'=>$data['file_name'],
				'tanggal'=>$tgl,
			);
				$where=array(
					'id_pengumuman'=>$id	
				);
				$this->M_data->Update('pengumuman',$data,$where);
			
				
				redirect('admin/pengumuman/tampil_peng');

			} 	
		}
		else{
	        $data=array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('isi'),
				'tanggal'=>$tgl,
			);
			$where=array(
					'id_pengumuman'=>$id	
				);
			$this->M_data->Update('pengumuman',$data,$where);
	        redirect('admin/pengumuman/tampil_peng');
	    }
    }
}