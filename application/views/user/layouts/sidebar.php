<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details" align="center">
                        <div>
                            <img src="<?php echo base_url('assets/blue/images/users/avatar-1.jpg');?>" alt="User Image" class="thumb-lg img-circle">
                        </div>
                        <div >
                            <h3><?=$this->session->userdata('nama');?></h3>
                            <p class="text-muted m-0">Siswa</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?= site_url('user/dashboard');?>" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li>
                                <a href="<?= site_url('user/pengumuman');?>" class="waves-effect"><i class="fa fa-pencil"></i> <span>Pengumuman</span></a>
                            </li>
                            
                            <li>
                                <a href="<?= site_url('user/profil');?>" class="waves-effect"><i class="fa fa-book"></i> <span>Profil</span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-pie-chart"></i>
                                <span>Nilai</span>
                                <span class="pull-right"><i class="md md-add"></i></span>
                                </a>
                                <ul class="list-unstyled">
                                  <li><a href="<?php echo site_url('user/nilai/semesterganjil');?>"></i> Semester Ganjil</a></li>
                                  <li><a href="<?php echo site_url('user/nilai/semestergenap');?>"></i> Semester Genap</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo site_url('user/jadwalpelajaran');?>"><i class="fa fa-th"></i> <span>Jadwal Pelajaran</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('user/presensi');?>"><i class="fa fa-th"></i> <span>Presensi</span></a>
                            </li>              
                          </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>