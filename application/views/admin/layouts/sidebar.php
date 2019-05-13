<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details" align="center">
                        <div>
                            <img src="<?php echo base_url('assets/blue/images/users/avatar-1.jpg');?>" alt="User Image" class="thumb-lg img-circle">
                        </div>
                        <div >
                            <h3><?=$this->session->userdata('nama');?></h3>
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?= site_url('admin/dashboard');?>" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Input Data </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('admin/siswa/create');?>">Input Data Siswa</a></li>
                                    <li><a href="<?php echo site_url('admin/inputdata/inputguru');?>">Input Data Guru</a></li>
                                    <li><a href="<?php echo site_url('admin/inputdata/inputmapel');?>">Input Mata Pelajaran</a></li>
                                    <li><a href="<?php echo site_url('admin/inputdata/inputwalikelas');?>">Input Wali Kelas</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Lihat Data </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('admin/lihatdata/siswa');?>">Data Siswa</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/guru');?>">Data Guru</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/kelas');?>">Data Kelas</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/mapel');?>">Mata Pelajaran</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/lihatwalikelas');?>">Data Wali Kelas</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Akademik </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('admin/akademik/jadwal');?>">Jadwal Pelajaran</a></li>
                
                                </ul>
                                
                            </li>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>