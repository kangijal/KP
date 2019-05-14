<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('guru/layouts/header');?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view('guru/layouts/top_menu');?>

    <!-- Left side column. contains the logo and sidebar -->
    
    <?php $this->load->view('guru/layouts/sidebar');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>PROFIL
        </h1>
        <ol class="breadcrumb">
        
          <li><a href="#"><i class="fa fa-dashboard"></i> MTs.Fisabilillah</a></li>
          <li class="active">Profil</li>
        </ol>
      </section>


      <!-- Main content -->
      <section class="content">

    <!-- /.content -->
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <!-- Profile Image -->
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
              <!-- /.box-body -->
            </div>
          </div>
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
