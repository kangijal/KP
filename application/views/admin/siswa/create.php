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

                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?= $this->session->flashdata('berhasil'); ?>
                                </div>

                                <?php }

                                ?>


                                <div class="panel-heading"><h3 class="panel-title">Tambah Siswa</h3></div>
                                <div class="panel-body">
                                    <?php
                                    if(!empty($error))
                                    {
                                        echo $error;
                                    }
                                    ?>
                                    <?php echo form_open_multipart('admin/siswa/store',['class'=>'form-horizontal','role'=>'form']);?>             

                                    <form action="<?php echo site_url('admin/inputdata/storesiswa');?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">                                    

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">NIS</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nis" class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Kelas</label>
                                            <div class="col-md-10">
                                                <select name="id_kelas" class="form-control">
                                                    <option disabled selected>Pilih Kelas</option>
                                                    <?php foreach($kelas as $ks) : ?>
                                                        <option value="<?=$ks->id;?>"><?=$ks->nama_ruangan;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Nama Siswa</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nama" id="example-email" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Jenis Kelamin</label>
                                            <div class="col-md-10">
                                                <input type="radio" name="jk" id="optionsRadios2" value="L"> L
                                                <input style="margin-left: 100px" type="radio" name="jk" id="optionsRadios2" value="P"> P
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Tahun Masuk</label>
                                            <div class="col-md-10">
                                                <select name="th_masuk" class="form-control required">
                                                    <option disabled selected>Tahun Masuk</option>
                                                    <?php for($i=2009;$i<=2030;$i++){ echo "<option>$i</option>";}?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">TTL</label>
                                            <div class="col-md-5">
                                                <input type="text" name="ttl1" id="example-email" class="form-control" placeholder="Tempat">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" name="ttl2" id="ddtt" class="form-control" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">No. Handphone</label>
                                            <div class="col-md-10">
                                                <input type="number" name="nope" class="form-control" placeholder="Nomor Handphone">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Alamat</label>
                                            <div class="col-md-10">
                                                <textarea name="alamat" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Upload Photo</label>
                                            <div class="col-md-10">
                                                <input type="file" name="userfile" />
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-2 col-sm-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
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