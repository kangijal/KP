<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('guru/layouts/header'); ?>
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
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="panel panel-default">

                                <?php 
                                $berhasil = $this->session->flashdata('berhasil');

                                if(!empty($berhasil))
                                    { ?>

                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?= $this->session->flashdata('berhasil'); ?>
                                </div>

                                <?php }

                                ?>

                                <?php if(!empty($error)){echo $error;} ?>


                                <div class="panel-heading"><h3 class="panel-title">Tugas</h3></div>
                                <div class="panel-body">
                                    <form action="<?php echo site_url('guru/tugas/tambah');?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">                                    
                                        
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Deskripsi</label>
                                            <div class="col-md-10">
                                                <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Upload Photo</label>
                                            <div class="col-md-10">
                                                <input type="file" name="photo" />
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-2 col-sm-9">
                                              <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> <!-- End row -->
                  <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->
        </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    </div>
<!-- END wrapper -->



<?php $this->load->view('guru/layouts/footer'); ?>

</body>
</html>