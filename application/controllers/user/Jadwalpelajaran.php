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
		$nik = $this->session->userdata('username');
		$id_kelas = $this->db->where('nis',$nik)->get('siswa')->row();

		$kelas = $this->db->select('siswa.nis,ruang_kelas.nama_ruangan,ruang_kelas.id as id_kelas')->from('siswa')->join('ruang_kelas','ruang_kelas.id=siswa.id_kelas')->get()->row();
		$kelas_siswa = $kelas->id_kelas;
		$data['cek_kelas'] = $kelas;

		$data['senin'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','1')->like('ruang_kelas.id',$kelas_siswa)->get()->result();

		$data['selasa'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','2')->like('ruang_kelas.id',$kelas_siswa)->get()->result();

		$data['rabu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','3')->like('ruang_kelas.id',$kelas_siswa)->get()->result();

		$data['kamis'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','4')->like('ruang_kelas.id',$kelas_siswa)->get()->result();

		$data['jumat'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','5')->like('ruang_kelas.id',$kelas_siswa)->get()->result();

		$data['sabtu'] = $this->db->select('jadwal_pelajaran.*, mapel.nama_mapel as nama_mapel, jam.waktu as waktu')->from('jadwal_pelajaran')->join('ruang_kelas', 'ruang_kelas.id=jadwal_pelajaran.id_kelas', 'INNER')->join('mapel','mapel.id=jadwal_pelajaran.id_mapel','INNER')->join('jam','jam.id=jadwal_pelajaran.jam','INNER')->where('hari','6')->like('ruang_kelas.id',$kelas_siswa)->get()->result();

		$this->load->view('user/Jadwalpelajaran/index',$data);
	}
}