<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	public function GetData($table){
		$res=$this->db->get($table);
		return $res->result();
	}

	public function Insert($table,$data){
		$res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
	}

	public function GetWhere($table, $data){
        $res=$this->db->get_where($table, $data);
        return $res->result_array();
    }

 
    function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }

    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function GetDataGuru(){
        $this->db->select("g.NIP as nip, g.nama as nama, j.nama_jabatan as jabatan, g.tempat_lahir as tempat_lahir,g.tgl_lahir as tgl_lahir, g.jk as jk, g.ijazah as ijazah, g.gol as gol,g.status as status, g.status_guru as status_guru");
        $this->db->from('jabatan as j');
        $this->db->join('guru as g','j.id=g.id_jabatan');
        $query=$this->db->get();
        return $query->result();
    }
     public function GetGuru(){
        $this->db->select("g.NIP as nip, g.nama as nama, j.nama_jabatan as jabatan, g.tempat_lahir as tempat_lahir,g.tgl_lahir as tgl_lahir, g.jk as jk, g.ijazah as ijazah, g.gol as gol,g.status as status,g.level as level");
        $this->db->from('jabatan as j');
        $this->db->join('guru as g','j.id=g.id_jabatan');
        $this->db->where('level',2);
        $this->db->where('status_guru','aktif');
        $query=$this->db->get();
        return $query->result();
    }
    public function Getjk(){
        $this->db->select("distinct(jk) as jk");
        $this->db->from('guru');
        $query=$this->db->get();
        return $query->result();
    }

    public function GetPengumuman(){
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->order_by('tanggal');
        $query=$this->db->get();
        return $query->result();
    }

    public function GetTugas(){ 
        $this->db->select('*');
        $this->db->from('tugas');
        $this->db->order_by('id','DSC');
        $query=$this->db->get();
        return $query->result();
    }

    public function GetDataKelas($id_kelas){
        $this->db->select("s.nis as nis, s.nama as nama, s.tgl_lahir as tgl_lahir, s.tempat_lahir as tmpt_lahir, s.nama_ibu as nama_ibu, k.nama_ruangan as kelas,k.tahun_ajaran as tahun_ajaran,ks.id_kelas as id_kelas");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('siswa as s','s.nis=ks.nis');
        $this->db->where('ks.id_kelas', $id_kelas);
        $query=$this->db->get();
        return $query->result();
    }
    public function GetKelasprint(){
        

        $this->db->select("s.nis as nis, s.nama as nama, s.tgl_lahir as tgl_lahir, s.tempat_lahir as tmpt_lahir, s.nama_ibu as nama_ibu, ,ks.id_kelas as id_kelas, k.nama_ruangan as kelas,t.nama_tahun as tahun_ajaran, concat (nama_ruangan,' ',tahun_ajaran) as tahun");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('siswa as s','s.nis=ks.nis');
        $this->db->join('tahun as t','t.id_tahun=k.tahun_ajaran');
        $query=$this->db->get();
        return $query->result(); 
    }

    public function FilterKelas($id){
        $this->db->select("count(ks.id_kelas) as jumlah, g.nama as nama_guru, k.nama_ruangan as kelas,t.nama_tahun as tahun_ajaran,ks.id_kelas as id_kelas");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('guru as g','g.NIP=k.NIP');
        $this->db->join('tahun as t','t.id_tahun=k.tahun_ajaran');
        $this->db->group_by('ks.id_kelas');
        $this->db->where("t.nama_tahun",$id);
        $query=$this->db->get();
        return $query->result(); 
    }    
    public function GetKelas(){
        $this->db->select("count(ks.id_kelas) as jumlah, g.nama as nama_guru, k.nama_ruangan as kelas,t.nama_tahun as tahun_ajaran,ks.id_kelas as id_kelas");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('guru as g','g.NIP=k.NIP');
        $this->db->join('tahun as t','t.id_tahun=k.tahun_ajaran');
        $this->db->group_by('ks.id_kelas');
        $query=$this->db->get();
        return $query->result();
    }

    public function GetTahun(){
        $this->db->select("concat(k.nama_ruangan,' ',t.nama_tahun) as kelas");
        $this->db->from('ruang_kelas as k');
        $this->db->join('tahun as t','t.id_tahun=k.tahun_ajaran');
        $query=$this->db->get();
        return $query->result();
    }



    public function GetKelasById($id){
        $this->db->select("count(ks.id_kelas) as jumlah, g.nama as nama_guru, k.nama_ruangan as kelas,k.tahun_ajaran as tahun_ajaran,ks.id_kelas as id_kelas");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('guru as g','g.NIP=k.NIP');
        $this->db->group_by('ks.id_kelas');
        $this->db->where('tahun_ajaran', $id);
        $query=$this->db->get();
        return $query->result();
    }

    public function GetSiswaById($id){
         $this->db->select("s.nis as nis, s.nama as nama, s.tgl_lahir, s.tempat_lahir as tmpt_lahir, s.nama_ibu as nama_ibu, concat(k.nama_ruangan,' ',k.tahun_ajaran) as kelas ,ks.id_kelas as id_kelas");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('siswa as s','s.nis=ks.nis');
        $this->db->where('kelas', $id);
        $query=$this->db->get();
        return $query->result();
    }

    public function kelasdetail(){
        $this->db->select("distinct(nama_ruangan) as nama_ruangan");
        $this->db->from('ruang_kelas');
        $query=$this->db->get();
        return $query->result();
    }

    public function Getjumlahguru(){
        $this->db->select("count(NIP) as jumlah");
        $this->db->from('guru');
        $query=$this->db->get();
        return $query->result();
    }
     public function Getjumlahsiswa(){
        $this->db->select("count(nis) as jumlah");
        $this->db->from('siswa');
        $query=$this->db->get();
        return $query->result();
    }
    public function Getjumlahruang(){
        $this->db->select("count(distinct(nama_ruangan))as jumlah");
        $this->db->from('ruang_kelas');
        $query=$this->db->get();
        return $query->result();
    }

    public function delete_foto(){

    }
    function delete_foto_peng($id){
    $this->db->where('id_pengumuman',$id);
    $foto = $this->db->get('pengumuman')->result_array()[0]['gambar'];
    unlink("./assets/img/upload/".$foto);
  }
  function delete_foto_ber($id){
    $this->db->where('id_berita',$id);
    $foto = $this->db->get('berita')->result_array()[0]['gambar'];
    unlink("./assets/img/upload/".$foto);
  }

  function select_tahun(){
    $tahun=$this->db->get('tahun');
    return $tahun->result();
  }


  function select_kelas($id){
    $this->db->select("s.nis as nis, s.nama as nama, s.tgl_lahir as tgl_lahir, s.tempat_lahir as tmpt_lahir, s.nama_ibu as nama_ibu, ,ks.id_kelas as id_kelas, k.nama_ruangan as kelas,k.tahun_ajaran as tahun_ajaran, concat (nama_ruangan,' ',tahun_ajaran) as tahun");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('siswa as s','s.nis=ks.nis');
        $this->db->where("tahun_ajaran",$id);
        $query=$this->db->get();
        return $query->result(); 
  }

  function select_data($id){
    $this->db->select("s.nis as nis, s.nama as nama, s.tgl_lahir as tgl_lahir, s.tempat_lahir as tmpt_lahir, s.nama_ibu as nama_ibu, ,ks.id_kelas as id_kelas, k.nama_ruangan as kelas,t.nama_tahun as tahun_ajaran, concat (nama_ruangan,' ',tahun_ajaran) as tahun");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('siswa as s','s.nis=ks.nis');
        $this->db->join('tahun as t','t.id_tahun=k.tahun_ajaran');
        $this->db->where("kelas",$id);
        $query=$this->db->get();
        return $query->result(); 
  }

  public function Filter_Kelas($id,$nmkelas){
        $this->db->select("s.nis as nis, s.nama as nama, s.tgl_lahir as tgl_lahir, s.tempat_lahir as tmpt_lahir, s.nama_ibu as nama_ibu, ,ks.id_kelas as id_kelas, k.nama_ruangan as kelas,t.nama_tahun as tahun_ajaran, concat (nama_ruangan,' ',tahun_ajaran) as tahun, t.id_tahun as id_tahun");
        $this->db->from('kelas_siswa as ks');
        $this->db->join('ruang_kelas as k','k.id_kelas=ks.id_kelas');
        $this->db->join('siswa as s','s.nis=ks.nis');
        $this->db->join('guru as g','g.NIP=k.NIP');
        $this->db->join('tahun as t','t.id_tahun=k.tahun_ajaran');
        $this->db->where("k.tahun_ajaran",$id);
        $this->db->where("k.nama_ruangan",$nmkelas);
        $query=$this->db->get();
        return $query->result(); 
    }    

    
}