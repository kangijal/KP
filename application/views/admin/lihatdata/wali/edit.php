<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/layouts/header'); ?>
</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php $this->load->view('admin/layouts/top_menu');?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <?php $this->load->view('admin/layouts/sidebar');?>
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


                                <div class="panel-heading"><h3 class="panel-title">Edit Data Wali Murid</h3></div>
                                <div class="panel-body">
                                <form action="<?php echo site_url('admin/lihatdata/updatewali/'.$wali->id);?>" method="POST" class="form-horizontal" role="form">                                    
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Wali</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nama" class="form-control" value="<?= $wali->nama;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Siswa</label>
                                            <div class="col-md-10">
                                                <select name="nik" class="form-control">
                                                    <option>Pilih Nama</option>
                                                    <?php foreach($siswa as $sw) : ?>
                                                        <option value="<?= $sw->nik; ?>"><?= $sw->nama;?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-2 col-sm-9">
                                              <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
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

          <footer class="footer text-right">
            2015 © Moltran.
        </footer>

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