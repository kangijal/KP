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


                                <div class="panel-heading"><h3 class="panel-title">Input Wali Kelas</h3></div>
                                <div class="panel-body">
                                    <form action="<?php echo site_url('admin/inputdata/storewalikelas');?>" method="POST" class="form-horizontal" role="form">
                                   
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Guru</label>
                                            <div class="col-sm-9">
                                                <select name="id_nip" class="form-control">
                                                    <option>Pilih Nama</option>
                                                    <?php foreach($guru as $sw) : ?>
                                                        <option value="<?= $sw->NIP; ?>"><?= $sw->nama;?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Kelas</label>
                                            <div class="col-sm-9">
                                                <select name="id_kelas" class="form-control">
                                                    <option>Nama Kelas</option>
                                                    <?php foreach($kelas as $sw) : ?>
                                                        <option value="<?= $sw->id; ?>"><?= $sw->nama_ruangan;?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" >Tahun Ajaran</label>
                                            <div class="col-md-9">
                                                <select name="thn_ajaran" class="form-control required">
                                                    <option disabled selected>Pilih Th. ajaran</option>
                                                    <?php for($i=2019;$i<=2040;$i++){$a = $i+1; echo "<option>$i-$a</option>";}?>
                                                </select>
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

          </div>
    </div>
</div>
<!-- END wrapper -->



<?php $this->load->view('admin/layouts/footer'); ?>

</body>
</html>