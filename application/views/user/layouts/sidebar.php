<div class="left side-menu">
  <!-- sidebar: style can be found in sidebar.less -->
  <div class="sidebar-inner slimscrollleft">
    <!-- Sidebar user panel -->
    <div class="user-details" align="center">
      <div>
        <img src="<?php echo base_url('assets/blue/images/avatar-1.jpg');?>" class="img-circle thumb-lg" alt="User Image">
      </div>
      <div >
        <h3><?=$this->session->userdata('nama');?></h3>
        <p class="text-muted m-0">siswa</p>
      </div>
    </div>
    
    <!-- search form -->
   
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <div id="sidebar-menu" >
    <ul>

      <li>
        <a href="<?= site_url('user/dashboard');?>" class="waves-effect active">
        <i class="md md-home"></i> <span>Dashboard</span>
        </a>
      </li>
<!-- 
      <li><a href="<?= site_url('user/pengumuman');?>"><i class="fa fa-pencil"></i> <span>Pengumuman</span></a></li> -->

      <li><a href="<?= site_url('user/profil');?>"><i class="fa fa-book"></i> <span>Profil</span></a></li>

      <li class="has_sub">
        <a href="#" class="waves-effect"><i class="fa fa-pie-chart"></i><span>Nilai</span><span class="pull-right"><i class="md md-add"></i></span></a>
        <ul class="list-unstyled">
          <li><a href="<?= site_url('user/nilai/semesterganjil');?>"><i class="fa fa-circle-o"></i> Semester Ganjil</a></li>
          <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Semester Genap</a></li>
        </ul>
      </li>

      <li>
        <a href="<?= site_url('user/jadwalpelajaran');?>">
        <i class="fa fa-th"></i> <span>Jadwal Pelajaran</span>
        </a>
      </li>   
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>