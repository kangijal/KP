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


                                <div class="panel-heading"><h3 class="panel-title">Edit Data Kelas <?= $kelas->nama_ruangan; ?></h3></div>
                                <div class="panel-body">
                                    <form action="<?php echo site_url('admin/lihatdata/updatekelas/'.$kelas->id);?>" method="POST" class="form-horizontal" role="form">                                    
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Input Select</label>
                                            <div class="col-sm-4">
                                                <select name="nama1" class="form-control">
                                                    <option><?php echo $kelas2[0]; ?></option>
                                                    <option>VII</option>
                                                    <option>VIII</option>
                                                    <option>IX</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select name="nama2" class="form-control">
                                                    <option><?php echo $kelas2[1]; ?></option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                    <option>E</option>
                                                    <option>F</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-email">Jumlah Siswa</label>
                                            <div class="col-md-8">
                                                <input type="number" maxlength="2" name="jumlah_siswa" id="example-email" value="<?= $kelas->jumlah_siswa;?>" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
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