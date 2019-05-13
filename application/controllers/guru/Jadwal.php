<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$nip = $this->session->userdata('nik');
		$data['senin'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('hari','senin')->get()->result();

		$data['selasa'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('hari','selasa')->get()->result();

		$data['rabu'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('hari','rabu')->get()->result();

		$data['kamis'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('hari','kamis')->get()->result();

		$data['jumat'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('hari','jumat')->get()->result();

		$data['sabtu'] = $this->db->select('jadwal_pelajaran.*,ruang_kelas.nama_ruangan,mapel.nama_mapel')->from('jadwal_pelajaran')->join('ruang_kelas','ruang_kelas.id=jadwal_pelajaran.id_kelas')->join('mapel','mapel.kode_mapel=jadwal_pelajaran.kode_mapel')->where('hari','sabtu')->get()->result();

		$this->load->view('guru/jadwal/index',$data);
	}
}