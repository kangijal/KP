<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('guru/layouts/header'); ?>
</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php $this->load->view('guru/layouts/top_menu');?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <?php $this->load->view('guru/layouts/sidebar');?>
        <!-- Left Sidebar End --> 



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->                      
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">

                                <?php 
                                $berhasil = $this->session->flashdata('berhasil');

                                if(!empty($berhasil))
                                { ?>

                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?= $this->session->flashdata('berhasil'); ?>
                                </div>

                            <?php }

                            ?>


                            <div class="panel-heading"><h3 class="panel-title">Input Nilai</h3></div>
                            <div class="panel-body">
                            <form action="<?=site_url('guru/nilai/store');?>" method="POST" class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputEmail3" class="col-md-2 control-label">Siswa</label>
                <div class="col-md-6">
                  <select name="nik_siswa" class="form-control">
                    <option disable selected="">Pilih Siswa</option>
                    <?php foreach($siswa as $siswa) : ?>
                      <option value="<?=$siswa->nis;?>"><?=$siswa->nama;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>

              <!-- <div class="form-group">
                <label for="inputEmail3" class="col-md-2 control-label">Kelas</label>
                <div class="col-md-6">
                  <select name="id_kelas" class="form-control">
                    <option disable selected="">Pilih Kelas</option>
                    <?php foreach($kelas as $ks) : ?>
                      <option value="<?=$ks->id;?>"><?=$ks->nama_ruangan;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div> -->

              <div class="form-group">
                <label for="inputPassword3" class="col-md-2 control-label">Mata Pelajaran</label>
                <div class="col-md-6">
                  <select name="mapel" class="form-control">
                    <option disabled selected="">Pilih Mapel</option>
                    <?php foreach($mapel as $mapel) : ?>
                      <option value="<?=$mapel->id;?>"><?=$mapel->nama_mapel;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-md-2 control-label">Semester</label>
                <div class="col-md-6">
                  <select name="semester" class="form-control">
                    <option disabled selected="">Pilih Semester</option>
                    <option value="genap">Genap</option>
                    <option value="ganjil">Ganjil</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-md-2 control-label">Tahun Ajaran</label>
                <div class="col-md-6">
                  <select name="thn_ajaran" class="form-control required">
                    <option disabled selected>Tahun Ajaran</option>
                    <?php for($i=2009;$i<=2100;$i++){$a = $i+1; echo "<option>$i-$a</option>";}?>
                  </select>
                </div>
              </div>

              <!-- <div class="form-group">
                <label for="inputPassword3" class="col-md-2 control-label">Tugas</label>
                <div class="col-md-6">
                  <input type="number" name="tugas" class="form-control">
                </div>
              </div> -->

              <div class="form-group">
                <label for="inputPassword3" class="col-md-2 control-label">UTS</label>
                <div class="col-md-6">
                  <input type="number" name="uts" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-md-2 control-label">UAS</label>
                <div class="col-md-6">
                  <input type="number" name="uas" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-md-6">
                  <button type="submit" class="btn btn-default">Input Nilai</button>
                </div>
              </div>
            </form>
                          </div> <!-- panel-body -->
                      </div> <!-- panel -->
                  </div> <!-- col -->
              </div> <!-- End row -->
              <!-- end row -->

          </div> <!-- container -->

      </div> <!-- content -->
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->

<!-- /Right-bar -->

</div>
<!-- END wrapper -->



<?php $this->load->view('guru/layouts/footer'); ?>

</body>
</html>