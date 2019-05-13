<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Jadwalpelajaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$nik = $this->session->userdata('nik');
		$id_kelas = $this->db->where('nis',$ni)->get('siswa_has_kelas')->row();
		$id_kelas = $id_kelas->id_kelas;

		$kelas = $this->db->select('siswa_has_kelas.nik,ruang_kelas.nama_ruangan,ruang_kelas.id as id_kelas')->from('siswa_has_kelas')->join('ruang_kelas','ruang_kelas.id=siswa_has_kelas.id_kelas')->get()->row();

		$data['cek_kelas'] = $kelas;

		$data['senin'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('id_kelas',$id_kelas)->where('hari','senin')->get()->result();

		$data['selasa'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('id_kelas',$id_kelas)->where('hari','selasa')->get()->result();

		$data['rabu'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('id_kelas',$id_kelas)->where('hari','rabu')->get()->result();

		$data['kamis'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('id_kelas',$id_kelas)->where('hari','kamis')->get()->result();

		$data['jumat'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('id_kelas',$id_kelas)->where('hari','jumat')->get()->result();

		$data['sabtu'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('id_kelas',$id_kelas)->where('hari','sabtu')->get()->result();

		$this->load->view('user/Jadwalpelajaran/index',$data);
	}
}