<?php
class M_siswa extends CI_Model{
    
    function cekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('siswa')->row_array();
        return $user;
    }
    
}