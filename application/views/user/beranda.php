<?php
if($this->session->userdata("username")){

}else {
	redirect(site_url('./'));
}

?>

<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('user/layouts/header'); ?>
</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php $this->load->view('user/layouts/top_menu');?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <?php $this->load->view('user/layouts/sidebar');?>
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
                                <li><a href="#">SDN 2 Pedes</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <img style="margin-bottom:30px; text-align:center; width:100%;>" src="<?php echo base_url('assets/blue/images/mantap.png');?>">

                   


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



    <?php $this->load->view('user/layouts/footer'); ?>

</body>
</html>