<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Nilai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$nip = $this->session->userdata('username');

		$kelas = $this->db->select('wali_kelas.id_kelas, ruang_kelas.nama_ruangan, ruang_kelas.id as id_kelas')->from('wali_kelas')->join('ruang_kelas','ruang_kelas.id=wali_kelas.id_kelas')->where('wali_kelas.id_guru',$nip)->get()->row();
		$kelas_guru = $kelas->id_kelas;

		$data['matapelajaran'] = $this->db->get('mapel')->result();
		$matapelajaran = $this->input->post('matapelajaran',true);

		$data['siswa'] = $this->db->select('*')->from('siswa')->where('id_kelas',$kelas_guru)->get()->result();
		$data['mapel'] = $this->db->from('mapel')->where('id',$matapelajaran)->get()->result_array();

		$data['nilai'] = $this->db->select('*')->from('nilai_siswa')->where('id_kelas',$kelas_guru)->where('id_mapel',$matapelajaran)->get()->result_array();
	
		$data['siswa'] = $this->db->select('siswa.*, ruang_kelas.nama_ruangan')
		->join("ruang_kelas", "ruang_kelas.id=siswa.id_kelas")
		->from('siswa')
		->where('id_kelas',$kelas_guru)
		->get()->result_array();
		//print_r($data['nilai']); exit;

		$this->load->view('guru/nilai/create',$data);
	}

	public function store()
	{
		do{
			// $id = random_string('alnum',15);
			$id=0;
			$cek = $this->db->where('id',$id)->get('jadwal_pelajaran')->result();
			$cek_id = count($cek);
		}while($cek_id > 0);
		$data['id'] = $this->input->post('id',true);
		// $data['id'] = $id;
		$data['nis'] = $this->input->post('nik_siswa',true);
		$data['id_kelas'] = 1;
		$data['id_mapel'] = $this->input->post('mapel',true);
		$data['semester'] = $this->input->post('semester',true);
		// $data['thn_ajaran'] = $this->input->post('thn_ajaran',true);
		// $data['tugas'] = $this->input->post('tugas',true);
		$data['uas'] = $this->input->post('uas',true);
		$data['uts'] = $this->input->post('uts',true);

		$tugas = $this->input->post('tugas',true);
		$uts = $this->input->post('uts',true);
		$uas = $this->input->post('uas',true);
		// $data['rata'] = ($tugas + $uts + $uas) / 3;

		$this->db->insert('nilai_siswa',$data);
		$this->session->set_flashdata('berhasil','Nilai berhasil di input');
		redirect('guru/nilai');
	}

	public function lihat_nilai()
	{
		$nip = $this->session->userdata('username');

		$kelas = $this->db->select('wali_kelas.id_kelas, ruang_kelas.nama_ruangan, ruang_kelas.id as id_kelas')->from('wali_kelas')->join('ruang_kelas','ruang_kelas.id=wali_kelas.id_kelas')->where('wali_kelas.id_guru',$nip)->get()->row();
		$kelas_guru = $kelas->id_kelas;

		$data['nilai'] = $this->db->select('nilai_siswa.*, mapel.nama_mapel, ruang_kelas.nama_ruangan, siswa.nama')->from('nilai_siswa')->join('mapel','mapel.id=nilai_siswa.id_mapel')->join('siswa','siswa.nis=nilai_siswa.nis')->join('ruang_kelas','ruang_kelas.id=nilai_siswa.id_kelas')->where('nilai_siswa.id_kelas',$kelas_guru)->get()->result();
		$this->load->view('guru/nilai/index',$data);
	}

	public function destroy($id)
	{
		$this->db->where('id',$id)->delete('nilai_siswa');
		$this->session->set_flashdata('berhasil','Nilai berhasil di hapus');
		redirect('guru/nilai/lihat_nilai');
	}

	public function cetak()
	{
		$data['nilai'] = $this->db->select('nilai_siswa.*,siswa.nama,mapel.nama_mapel')->from('nilai_siswa')->join('siswa','siswa.nik=nilai_siswa.nik_siswa','INNER')->join('mapel','mapel.kode_mapel=nilai_siswa.kode_mapel')->get()->result();

		$html = $this->load->view('guru/nilai/pdf',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_nilai_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            // echo $e;
			$this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			redirect('guru/nilai/lihat_nilai');
		}
	}

	// public function create_ekskul()
	// {
	// 	$data['siswa'] = $this->db->get('siswa')->result();
	// 	$data['ekskul'] = $this->db->get('ekskul')->result();

	// 	$this->load->view('guru/nilai/ekskul',$data);
	// }

	// public function store_ekskul()
	// {
	// 	$data['nik_siswa'] = $this->input->post('nik_siswa',true);
	// 	$data['nama'] = $this->input->post('nama',true);
	// 	$data['nilai'] = $this->input->post('nilai',true);

	// 	$this->db->insert('nilai_ekskul',$data);
	// 	$this->session->set_flashdata('berhasil','Nilai berhasil di input');
	// 	redirect('guru/nilai/create_ekskul');
	// }

	public function cetak2()
	{
		$data['nilai'] = $this->db->select('nilai_siswa.*,siswa.nama,mapel.nama_mapel')->from('nilai_siswa')->join('siswa','siswa.nik=nilai_siswa.nik_siswa','INNER')->join('mapel','mapel.kode_mapel=nilai_siswa.kode_mapel')->get()->result();

		$html = $this->load->view('guru/nilai/pdf',$data,true);

		require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
		try {
			$html2pdf = new HTML2PDF('L', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
			$html2pdf->WriteHTML($html);
			$html2pdf->Output('laporan_nilai_'.date('Ymd').'.pdf');
		} catch (HTML2PDF_exception $e) {
            echo $e;
			// $this->session->set_flashdata('berhasil', 'Maaf, kami mengalami kendala teknis.');
			// redirect('guru/nilai/lihat_nilai');
		}
	}

	public function ratih()
	{
		$matapelajaran = $this->input->post('matapelajaran',true);

		$nis 		= $this->input->post("nis[]");
		$kelas 		= $this->input->post("kelas[]");
		$mapel 		= $this->input->post("mapel[]");
		// $semester 	= $this->input->post("semester[]");
		$uts 		= $this->input->post("uts[]");
		$uas 		= $this->input->post("uas[]");
		$uts2 		= $this->input->post("uts2[]");
		$uas2 		= $this->input->post("uas2[]");

		//print_r($uts2); exit;
        $nilai = $this->db->select("*")->from("nilai_siswa")
		//->where("id_mapel", $matapelajaran)
		->where("id_kelas", $kelas["0"])
        ->order_by("id", "ASC")
		->get()->result_array();

		$this->db->trans_begin();
		if (count($nilai) > 0) {
			$this->db->where("id_kelas", $kelas["0"])->where('id_mapel',$mapel["0"])->delete("nilai_siswa");

			for ($i=0; $i<count($nis); $i++) {
				if (!empty($uts[$i])) {
					$nilai_uts = $uts[$i];
				} else {
					$nilai_uts = "0";
				}

				if (!empty($uas[$i])) {
					$nilai_uas = $uas[$i];
				} else {
					$nilai_uas = "0";
				}

				if (!empty($uts2[$i])) {
					$nilai_uts2 = $uts2[$i];
				} else {
					$nilai_uts2 = "0";
				}

				if (!empty($uas2[$i])) {
					$nilai_uas2 = $uas2[$i];
				} else {
					$nilai_uas2 = "0";
				}

				$this->db->insert("nilai_siswa",
                    array(
                        "nis" => $nis[$i],
                        "id_kelas" => $kelas["0"],
                        "id_mapel" => $mapel[$i],
                        // "semester" => $semester["0"],
                        "uts" => $nilai_uts,
						"uas" => $nilai_uas,
						"uts2" => $nilai_uts2,
                        "uas2" => $nilai_uas2,
                    )
                );
			}
		} else {
			for ($i=0; $i<count($nis); $i++) {
				if (!empty($uts[$i])) {
					$nilai_uts = $uts[$i];
				} else {
					$nilai_uts = "0";
				}

				if (!empty($uas[$i])) {
					$nilai_uas = $uas[$i];
				} else {
					$nilai_uas = "0";
				}
				if (!empty($uts2[$i])) {
					$nilai_uts2 = $uts2[$i];
				} else {
					$nilai_uts2 = "0";
				}

				if (!empty($uas2[$i])) {
					$nilai_uas2 = $uas2[$i];
				} else {
					$nilai_uas2 = "0";
				}

				$this->db->insert("nilai_siswa",
                    array(
                        "nis" => $nis[$i],
                        "id_kelas" => $kelas[$i],
                        "id_mapel" => $mapel[$i],
                        // "semester" => $semester[$i],
                        "uts" => $nilai_uts,
						"uas" => $nilai_uas,
						"uts2" => $nilai_uts2,
                        "uas2" => $nilai_uas2,
                    )
                );
			}
		}

		if ($this->db->trans_status() === TRUE) {
			$this->db->trans_commit();
        }
        else {
			$this->db->trans_commit();
        }
		redirect(base_url()."guru/nilai");

		//aksi tambah jika di form > di db
        // foreach ($kategorif as $kategorif_key => $kategorif_value) {
        //     $status = false;
        //     foreach ($kategorid as $kategorid_key => $kategorid_value) {
        //         if ($kategorif_key === (int) $kategorid_value["kategori_id"]) {
        //             $this->db->where("kategori_id", $kategorif_key)
        //             ->update("kategori",
        //                 array(
        //                     "kategori_variabel" => $variabel,
        //                     "kategori_nama" => $kategorif_value
        //                 )
        //             );
        //             for ($dk=1; $dk<=4; $dk++) {
        //                 if ($dk === 1) {
        //                     $nilai = $awal[$kategorif_key];
        //                 } else if ($dk === 2) {
        //                     $nilai = $tengahw[$kategorif_key];
        //                 } else if ($dk === 3) {
        //                     $nilai = $tengahk[$kategorif_key];
        //                 } else if ($dk === 4) {
        //                     $nilai = $akhir[$kategorif_key];
        //                 } else {
        //                     $nilai = "0";
        //                 }
        //                 $this->db
        //                 ->where("variabel_relasi_variabel", $variabel)
        //                 ->where("variabel_relasi_kategori", $kategorif_key)
        //                 ->where("variabel_relasi_derajat", $dk)
        //                 ->update("variabel_relasi",
        //                     array(
        //                         "variabel_relasi_nilai" => $nilai
        //                     )
        //                 );
        //             }
        //             $status = true;
        //         }
        //     }
        //     if ($status === false) {
        //         $this->db->insert("kategori",
        //             array(
        //                 "kategori_variabel" => $variabel,
        //                 "kategori_nama" => $kategorif_value
        //             )
        //         );
        //         $kategori_id = $this->db->insert_id();
        //         for ($dk=1; $dk<=4; $dk++) {
        //             $this->db->insert("variabel_relasi",
        //                 array(
        //                     "variabel_relasi_variabel" => $variabel,
        //                     "variabel_relasi_kategori" => $kategori_id,
        //                     "variabel_relasi_derajat" => $dk,
        //                     "variabel_relasi_nilai" => "0"
        //                 )
        //             );
        //         }
        //     }
        // }
	}
}