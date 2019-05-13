<?php

class M_auth extends CI_Model {
    
    function cek_loginadmin($table,$where){		
		return $this->db->get_where($table,$where);
	}
    public function aksi_loginadmin(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->db->where('username',$username);
    
        $query=$this->db->get('user')->row();
    
        $_SESSION['status'] = $query->status;
        if(!$query) return false;
        else return true;
    }
    
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
    public function aksi_loginguru(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->db->where('username',$username);
    
        $query=$this->db->get('guru')->row();
    
        $_SESSION['status'] = $query->status;
        if(!$query) return false;
        else return true;
    }
    }