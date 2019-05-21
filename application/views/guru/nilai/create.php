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
                                
                                <div class="panel-heading"><h3 class="panel-title"></h3></div>
                                <div class="panel-body">
                                   
                                    <form action="<?= site_url('guru/nilai/');?>" method="POST" id="formkelas" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Mata Pelajaran</label>
                                            <div class="col-sm-7">
                                                <select name="matapelajaran" class="form-control">
                                                    <option></option>
                                                    <?php foreach($matapelajaran as $matapelajaran) : ?>
                                                        <option value="<?= $matapelajaran->id;?>"><?= $matapelajaran->nama_mapel;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Cari</button>

                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div>
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

        <form method="POST" action="<?= base_url()."guru/nilai/ratih" ?>">
          <table class="data table table-striped">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Siswa</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Mata Pelajaran</th>
                <!-- <th class="text-center">Semester</th> -->
                <th class="text-center">UTS Ganjil</th>
                <th class="text-center">UAS Ganjil</th>
                <th class="text-center">UTS Genap</th>
                <th class="text-center">UAS Genap</th>
              </tr>
            </thead>
            <tbody><?php
                $nomor = 0;
                for ($i=0; $i<count($siswa); $i++) { 
                  for ($j=0; $j<count($mapel); $j++) { ?>
                    <input type="text" name="nis[]" value="<?= $siswa[$i]["nis"] ?>" class="hidden">
                    <input type="text" name="kelas[]" value="<?= $siswa[$i]["id_kelas"] ?>" class="hidden">
                    <input type="text" name="mapel[]" value="<?= $mapel[$j]["id"] ?>" class="hidden">
                    <!-- <input type="text" name="semester[]" value="<?= $siswa[$i]["semester"] ?>" class="hidden"> -->
                    <tr>
                      <td class="text-center"><?= ($nomor+1) ?></td>
                      <td><?= $siswa[$i]["nama"] ?></td>
                      <td><?= $siswa[$i]["nama_ruangan"] ?></td>
                      <td><?= $mapel[$j]["nama_mapel"] ?></td>
                      <!-- <td class="text-center"><?= $siswa[$i]["semester"] ?></td> -->
                      <td><input type="number" name="uts[]" class="form-control" value="<?= !empty($nilai[$nomor]["uts"]) ? $nilai[$nomor]["uts"] : "0" ?>"></td>
                      <td><input type="number" name="uas[]" class="form-control" value="<?= !empty($nilai[$nomor]["uas"]) ? $nilai[$nomor]["uas"] : "0" ?>"></td>
                      <td><input type="number" name="uts2[]" class="form-control" value="<?= !empty($nilai[$nomor]["uts2"]) ? $nilai[$nomor]["uts2"] : "0" ?>"></td>
                      <td><input type="number" name="uas2[]" class="form-control" value="<?= !empty($nilai[$nomor]["uas2"]) ? $nilai[$nomor]["uas2"] : "0" ?>"></td>
                    </tr>
                  <?php $nomor++; }
                  } ?>
            </tbody>
          </table>
          <div class="form-group">
            <div class="col-sm-offset-2 col-md-6">
              <button type="submit" class="btn btn-info col-md-12">Simpan</button>
            </div>
          </div>
        </form>
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
