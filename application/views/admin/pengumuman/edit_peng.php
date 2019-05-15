<div class="col-md-2">
  <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="<?php echo site_url('Admin/tampil_guru')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Guru</span></a></li>
            <li><a href="<?php echo site_url('Admin/tampil_siswa')?>" class="active"><i class="lnr lnr-dice"></i> <span>Data Siswa</span></a></li>
            <li><a href="<?php echo base_url('Admin/tampil_tahun')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Tahun Ajaran</span></a></li>
            <li><a href="<?php echo site_url('Admin/tampil_kelas')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Kelas</span></a></li>
            <li><a href="<?php echo base_url('Admin/tampil_peng')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Pengumuman</span></a></li>
            
            <li><a href="<?php echo base_url('Admin/tampil_ber')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Berita</span></a></li>
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="<?php echo base_url('C_report/tampil_guru')?>" class="">Laporan Data Guru</a></li>
                  <li><a href="<?php echo base_url('C_report/tampil_siswa')?>" class="">Laporan Data Siswa</a></li>
                  <li><a href="<?php echo base_url('C_report/tampil_kelas')?>" class="">Laporan Data Kelas</a></li>
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>
      </div>
    </div> 
  </div>

    <div class="col-md-10 ">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Data Guru</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Edit Data Siswa</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">

            <form method="post" action="<?php echo base_url()."Admin/edit_aksi_peng"; ?>">

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="hidden"  name="id_pengumuman" class="form-control" id="id_pengumuman" value="<?php echo $id_pengumuman;?>" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text"  name='judul' class="form-control" id="judul" value="<?php echo $judul;?>" placeholder="" required="">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="tempat_lahir" class="col-sm-2 col-form-label">Isi Pengumuman</label>
            <div class="col-sm-10">
              <input type="text"  name="isi" value="<?php echo $isi;?>" class="form-control" id="isi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label">upload gambar</label>
            <div class="col-sm-10">
              <input class="form-control" name="foto" type="file" size="20">
            </div>
          </div>  
          <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input type="date"  name="tanggal" class="form-control" value="<?php echo $tanggal;?>" id="tanggal" placeholder="" required="">
            </div>
          </div>
          

          <br>
          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
 