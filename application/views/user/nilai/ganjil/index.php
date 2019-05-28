<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('user/layouts/header');?>
</head>
<body class="fixed-left">
  <div id="wrapper">

    <?php $this->load->view('user/layouts/top_menu');?>

    <!-- Left side column. contains the logo and sidebar -->
    
    <?php $this->load->view('user/layouts/sidebar');?>

    <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                    <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"></h3></div>
                                <div class="panel-body">
                                   
                                    <form action="<?= site_url('user/nilai/semesterganjil');?>" method="POST" id="formkelas" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kelas</label>
                                            <div class="col-sm-7">
                                                <select name="kelas" class="form-control">
                                                    <option></option>
                                                    <?php foreach($kelas as $ks) : ?>
                                                        <option value="<?= $ks->id;?>"><?= $ks->nama_ruangan;?></option>
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

          <!-- <a target="_blank" class="btn btn-success" href="<?=site_url('user/nilai/cetak');?>">Cetak</a> -->

            <table class="datatables table table-striped">
              <thead>
                <tr>
                  <th>Mata Pelajaran</th>
                  <!-- <th>Semester</th> -->
                  <!-- <th>Tahun Ajaran</th> -->
                  <th>Kelas</th>
                  <th>UTS ganjil</th>
                  <th>UAS ganjil</th>
                  <th>UTS genap</th>
                  <th>UAS genap</th>
                  <!-- <th>Nilai Rata</th> -->
                </tr>
              </thead>
              <tbody>
                <?php foreach($nilai as $nilai) : ?>
                  <tr>
                    <td><?= $nilai->nama_mapel;?></td>
                    <!-- <td><?= $nilai->semester;?></td> -->
                    <!-- <td><?= $nilai->thn_ajaran;?></td> -->
                    <td><?= $nilai->nama_ruangan;?></td>
                    <td><?= $nilai->uts;?></td>
                    <td><?= $nilai->uas;?></td>
                    <td><?= $nilai->uts2;?></td>
                    <td><?= $nilai->uas2;?></td>
                    <!-- <td><?= $nilai->rata;?></td> -->
                  </tr>
                <?php endforeach;?>
              </tbody>
              <!-- <tfoot>
                <tr>
                  <th>Mata Pelajaran</th>
                  <th>Semester</th>
                   <th>Tahun Ajaran</th> -->
                  <!-- <th>Tugas</th> -->
                  <!-- <th>UTS</th>
                  <th>UAS</th> -->
                  <!-- <th>Nilai Rata</th> 
                </tr>
              </tfoot> -->
            </table>
        <div class="control-sidebar-bg"></div>
    </div> <!-- panel-body -->
  </div> <!-- panel -->
  </div> <!-- col -->
  </div> <!-- End row -->
                    <!-- end row -->

  </div> <!-- container -->

  </div> <!-- content -->

<?php $this->load->view('user/layouts/footer');?>
</body>
</html>
