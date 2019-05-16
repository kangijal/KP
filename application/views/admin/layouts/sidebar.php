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
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Master Data </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('admin/lihatdata/siswa');?>">Data Siswa</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/guru');?>">Data Guru</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/kelas');?>">Data Kelas</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/mapel');?>">Mata Pelajaran</a></li>
                                    <li><a href="<?php echo site_url('admin/lihatdata/lihatwalikelas');?>">Data Wali Kelas</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-upload"></i><span> Naik Kelas </span><span class="pull-right"><i class="md md-add"></i></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('admin/naikkelas/kelas1');?>">kelas 1</a></li>
                                    <li><a href="<?php echo site_url('admin/naikkelas/kelas2');?>">kelas 2</a></li>
                                    <li><a href="<?php echo site_url('admin/naikkelas/kelas3');?>">kelas 3</a></li>
                                    <li><a href="<?php echo site_url('admin/naikkelas/kelas4');?>">kelas 4</a></li>
                                    <li><a href="<?php echo site_url('admin/naikkelas/kelas5');?>">kelas 5</a></li>
                                    <li><a href="<?php echo site_url('admin/naikkelas/kelas6');?>">kelas 6</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/akademik/jadwal');?>" class="waves-effect"><i class="md md-invert-colors-on"></i><span>Jadwal Pelajaran</span></a>
                            </li>
                            
                            <li>
                                <a href="<?= site_url('admin/pengumuman/tampil_peng');?>" class="waves-effect"><i class="fa fa-pencil"></i><span> Pengumuman </span></a>
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