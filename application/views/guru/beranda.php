<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/layouts/header'); ?>
</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php $this->load->view('guru/layouts/top_menu');?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <?php $this->load->view('guru/layouts/sidebar');?>
        <!-- Left Sidebar End --> 



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->                      
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="pull-left page-title">Selamat Datang</h4>
                            <ol class="breadcrumb pull-right">
                                <li><a href="#">MTs.Fisabilillah</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <img style="margin-bottom:30px; text-align:center; width:100%;>" src="<?php echo base_url('assets/blue/images/mantap.png');?>">

                    <!-- Start Widget -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <a href="<?= site_url('admin/lihatdata/siswa');?>">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-ios7-people"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?= $total_siswa;?></span>
                                        Total Siswa
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <a href="<?= site_url('admin/lihatdata/guru');?>">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?= $total_guru;?></span>
                                        Total Guru
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <a href="<?= site_url('admin/lihatdata/kelas');?>">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="ion-ios7-barcode"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?= $total_kelas;?></span>
                                        Total Kelas
                                    </div>
                                </div>s
                            </a>
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <a href="<?= site_url('admin/lihatdata/mapel');?>">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-laptop"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?= $total_mapel;?></span>
                                        Total Mata Pelajaran
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 

                
                    <!-- End row-->


                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->

        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <?php $this->load->view('admin/layouts/footer'); ?>

</body>
</html>