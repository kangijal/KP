<div class="left side-menu">
  <!-- sidebar: style can be found in sidebar.less -->
  <div class="sidebar-inner slimscrollleft">
    <!-- Sidebar user panel -->
    <div class="user-details" align="center">
      <div>
        <img src="<?php $this->session->userdata('photo')?>" class="img-circle" alt="User Image">
      </div>
      <div>
        <h3><?=$this->session->userdata('nama');?></h3>
        <p class="text-muted m-0">guru</p>
      </div>
    </div>
    <!-- search form -->
   
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <div id="sidebar-menu" >
    <ul>

      <!-- <li>
        <a href="<?= site_url('user/dashboard');?>">
        <i class="fa fa-th"></i> <span>Dashboard</span>
        </a>
      </li>

      <li><a href="<?= site_url('guru/pengumuman');?>"><i class="fa fa-pencil"></i> <span>Pengumuman</span></a></li> -->

      <li class="has_sub">
        <ul class="list-unstyled">
          <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul>
      </li>
      <li>
        
      </li>
      <li><a href="<?= site_url('guru/profil');?>"><i class="fa fa-book"></i> <span>Profil</span></a></li>
      <li class="has_sub">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Nilai</span>
          <span class="pull-right">
            <i class="md md-add"></i>
          </span>
        </a>
        <ul class="list-unstyled">
          <li><a href="<?= site_url('guru/nilai');?>"><i class="fa fa-circle-o"></i> Input Nilai</a></li>
          <li><a href="<?=site_url('guru/nilai/lihat_nilai');?>"><i class="fa fa-circle-o"></i> Lihat Nilai</a></li>

          <!-- <li><a href="<?=site_url('guru/nilai/create_ekskul');?>"><i class="fa fa-circle-o"></i> Input Nilai Ekstrakurikuler</a></li> -->
        </ul>
      </li>
      <li>
        <a href="<?= site_url('guru/jadwal');?>">
        <i class="fa fa-th"></i> <span>Jadwal Pelajaran</span>
        </a>
      </li>  
    </ul>
  </div>
  <!-- /.sidebar -->
</div>