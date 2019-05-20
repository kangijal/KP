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
            <div class="col-sm-8">
              <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">profil guru</h3></div>
                <div class="panel-body">
                <form action="<?php echo site_url('guru/profil/editprofil/'.$profil->NIP);?>" method="POST" class="form-horizontal" role="form">                                    
                <div align="center">
                <?php $poto = $photo->photo;?>

              <?php if (empty($poto)) : ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/upload/guru/default.png');?>" alt="">
            <?php else : ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/upload/guru/'.$poto);?>" alt="">
            <?php endif;?>

                <h3 class="profile-username text-center"><?php echo $profil->nama;?></h3>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                      <div class="col-md-6">
                    <input disabled type="text" class="form-control" value="<?= $profil->NIP;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan</label>
                      <div class="col-md-4">
                    <input disabled type="text" class="form-control" value="<?= $profil->jabatan;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">TTL</label>
                      <div class="col-md-6">
                    <input type="text" class="form-control" name="ttl" value="<?= $profil->ttl;?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Kelamin</label>
                    <div class="col-md-6">
                    <input disabled type="text" class="form-control" value="<?php echo ($profil->jk == 'L') ? 'Laki-Laki' : 'Perempuan';?>">
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

                <div class="form-group m-b-0">
                  <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-success waves-effect waves-light pull-right">Simpan</button>
                  </div>
                </div>

                </form>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-4 col-md-offset-4">
             Profile Image 
            <div class="box box-primary">
              <div class="box-body box-profile">

              <?php $poto = $photo->photo;?>

              <?php if (empty($poto)) : ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/upload/guru/default.png');?>" alt="User profile picture">
            <?php else : ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/upload/guru/'.$poto);?>" alt="User profile picture">
            <?php endif;?>

                <h3 class="profile-username text-center"><?php echo $profil->nama;?></h3>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>NIP</b> <a class="pull-right"><?= $profil->NIP;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Jabatan</b> <a class="pull-right"><?= $profil->jabatan;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>No. Handphone</b> <a class="pull-right"><?= $profil->nope;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>TTL</b> <a class="pull-right"><?= $profil->ttl;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis Kelamin</b> <a class="pull-right"><?php echo ($profil->jk == 'L') ? 'Laki-Laki' : 'Perempuan';?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="pull-right"><?= $profil->alamat;?></a>
                  </li>
                </ul>

              </div>
             /.box-body 
            </div>
          </div> -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->

    </div>
    
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('guru/layouts/footer');?>
</body>
</html>
