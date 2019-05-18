<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('guru/layouts/header');?>
</head>
<body class="fixed-left">
  <div id="wrapper">

    <?php $this->load->view('guru/layouts/top_menu');?>

    <!-- Left side column. contains the logo and sidebar -->
    
    <?php $this->load->view('guru/layouts/sidebar');?>

    <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">

        <!-- /.content -->
        <?php 
        $berhasil = $this->session->flashdata('berhasil');

        if(!empty($berhasil))
        { ?>

        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?= $this->session->flashdata('berhasil'); ?>
        </div>

        <?php }

        ?>
        <div class="panel-heading"><h3 class="panel-title">Nilai</h3></div>
        <div class="panel-body" align="center">


        <a href="<?=site_url('guru/nilai/cetak2');?>" target="_blank" class="btn btn-success" style="width: 20%;">Cetak</a>

        <table class="data table table-striped">
          <thead>
            <tr>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Mata Pelajaran</th>
              <!-- <th>Semester</th> -->
              <th>UTS</th>
              <th>UAS</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody><?php
              $nomor = 1;
              for ($i=0; $i<count($siswa); $i++) { 
                for ($j=0; $j<count($mapel); $j++) { ?>
                  <input name="nis[]" value="<?= $siswa[$i]["nis"] ?>" class="hidden">
                  <tr>
                    <td><?= $siswa[$i]["nama"] ?></td>
                    <td><?= $siswa[$i]["nama_ruangan"] ?></td>
                    <td><?= $mapel[$j]["nama_mapel"] ?></td>
                    <!-- <td><?= $siswa[$i]["semester"] ?></td> -->
                    <td><input type="number" name="uts[]" class="form-control"></td>
                    <td><input type="number" name="uas[]" class="form-control"></td>
                  </tr>
                <?php $nomor++; }
                } ?>
          </tbody>
        </table>
        <!-- /.content -->

      <div class="control-sidebar-bg"></div>
    </div> <!-- panel-body -->
  </div> <!-- panel -->
  </div> <!-- col -->
  </div> <!-- End row -->
                    <!-- end row -->

  </div> <!-- container -->

  </div> <!-- content -->

<?php $this->load->view('guru/layouts/footer');?>
</body>
</html>
