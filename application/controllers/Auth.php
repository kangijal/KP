<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
    }

    function index() {
        $this->load->view('auth/login');
    }

    function cek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username = $this->input->post('username');
			$password = $this->input->post('password');
			$login = $this->M_admin->ceklogin($username, $password);
            if (!empty($login)) {
                // sukses login admin
                $this->session->set_userdata($login);
                if($this->session->userdata('level')=='admin'){
                    redirect('admin/dashboard');
                }elseif($this->session->userdata('level')=='guru'){
                    redirect('guru/dashboard');
                } elseif($this->session->userdata('level')=='siswa'){
                    redirect('user/dashboard');
                }
                
            } else {
                // gagal login
                redirect('auth');
            }
        } else {
            redirect('auth');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('dashboard');
    }
}

?>