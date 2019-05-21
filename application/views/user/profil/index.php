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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-page">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">profil siswa</h3></div>
                <div class="panel-body">
                <form action="<?php echo site_url('user/profil/editprofil/'.$profil->nis);?>" method="POST" class="form-horizontal" role="form">                                    
                <div align="center">
                <?php $poto = $photo->photo;?>

                <?php if (empty($poto)) : ?>
                  <img class="profile-user-img img-responsive thumb-lg img-square" src="<?php echo base_url('assets/upload/guru/default.png');?>" alt="User profile picture">
                <?php else : ?>
                  <img class="profile-user-img img-responsive thumb-lg img-square " src="<?php echo base_url('assets/upload/siswa/'.$poto);?>" alt="User profile picture">
                <?php endif;?>
                <h3 class="profile-username"><?php echo $profil->nama;?></h3>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label">NIS</label>
                      <div class="col-md-6">
                    <input disabled type="text" class="form-control" value="<?= $profil->nis;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Tahun masuk</label>
                      <div class="col-md-4">
                    <input disabled type="text" class="form-control" value="<?= $profil->th_masuk;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">TTL</label>
                      <div class="col-md-6">
                    <input type="text" class="form-control" value="<?= $profil->ttl;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">No. Handphone</label>
                      <div class="col-md-6">
                    <input type="text" name="nope" class="form-control" value="<?= $profil->nope;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                      <div class="col-md-6">
                    <input type="text" name="alamat" class="form-control" value="<?= $profil->alamat;?>">
                  </div>
                </div>

                
                <hr>
                <h3 class="panel-title text-center">Profil walimurid</h3>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Ayah</label>
                      <div class="col-md-8">
                    <input  type="text" name="ayah" class="form-control" value="<?= $wali->ayah;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Ibu</label>
                      <div class="col-md-8">
                    <input  type="text" name="ibu" class="form-control" value="<?= $wali->ibu;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Pekerjaan Ayah</label>
                      <div class="col-md-8">
                    <input type="text" name="p_ayah" class="form-control" value="<?= $wali->p_ayah;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Pekerjaan Ibu</label>
                      <div class="col-md-8">
                    <input  type="text" name="p_ibu" class="form-control" value="<?= $wali->p_ibu;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Ayah</label>
                      <div class="col-md-6">
                    <input type="text" name="g_ayah" class="form-control" value="<?= $wali->g_ayah;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Ibu</label>
                      <div class="col-md-6">
                    <input type="text" name="g_ibu" class="form-control" value="<?= $wali->g_ibu;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Pendidikan Ayah</label>
                      <div class="col-md-8">
                    <input type="text" name="pend_ayah" class="form-control" value="<?= $wali->pend_ayah;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Pendidikan Ibu</label>
                      <div class="col-md-8">
                    <input type="text" name="pend_ibu" class="form-control" value="<?= $wali->pend_ibu;?>">
                  </div>
                </div>

                <div class="form-group m-b-0">
                  <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-success waves-effect waves-light pull-right">Simpan</button>
                  </div>
                </div>
                
                </form>
                <!-- <div class="form-group">
                  <div class="">
                    <b>NIS</b> <a class="pull-right"><?= $profil->nis;?></a>
                  </div>
                  <li class="list-group-item">
                    <b>Tahun masuk</b> <a class="pull-right"><?= $profil->th_masuk;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>No. Handphone</b> <a class="pull-right"><?= $profil->nope;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>TTL</b> <a class="pull-right"><?= $profil->ttl;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="pull-right"><?= $profil->alamat;?></a>
                  </li>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="control-sidebar-bg"></div>
</div>

<?php $this->load->view('user/layouts/footer');?>
</body>
</html>
