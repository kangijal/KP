<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('user/layouts/header');?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div id="wrapper">

    <?php $this->load->view('user/layouts/top_menu');?>

    <!-- Left side column. contains the logo and sidebar -->
    
    <?php $this->load->view('user/layouts/sidebar');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>PROFIL
        </h1>
        <ol class="breadcrumb">

          <li><a href="#"><i class="fa fa-dashboard"></i>SD 2 Pedes</a></li>
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
                  <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/upload/siswa/'.$poto);?>" alt="User profile picture">
                <?php endif;?>

                <h3 class="profile-username text-center"><?php echo $profil->nama;?></h3>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>NIK</b> <a class="pull-right"><?= $profil->nis;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tahun Ajaran</b> <a class="pull-right"><?= $profil->thn_ajaran;?></a>
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
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('user/layouts/footer');?>
</body>
</html>
