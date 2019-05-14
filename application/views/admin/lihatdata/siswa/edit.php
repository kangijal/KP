<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/layouts/header'); ?>
</head>

<body class="fixed-left">

    <div id="wrapper">

        <?php $this->load->view('admin/layouts/top_menu');?>
        <?php $this->load->view('admin/layouts/sidebar');?>

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


                                <div class="panel-heading"><h3 class="panel-title">Edit Data Siswa</h3></div>
                                <div class="panel-body">
                                    <form action="<?php echo site_url('admin/lihatdata/updatesiswa/'.$siswa->nis);?>" method="POST" class="form-horizontal" role="form">                                    
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">NIS</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nis" class="form-control" value="<?= $siswa->nis;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Nama Siswa</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nama" value="<?= $siswa->nama;?>" id="example-email" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Kelas</label>
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
                                            <label class="col-md-2 control-label" for="example-email">Jenis Kelamin</label>
                                            <div class="col-md-10">
                                                <input type="radio" name="jk" id="optionsRadios2" value="L"> L
                                                <input style="margin-left: 100px" type="radio" name="jk" id="optionsRadios2" value="P"> P
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Tahun Ajaran</label>
                                            <div class="col-md-10">
                                                <select name="thn_ajaran" class="form-control required">
                                                    <option disabled selected><?= $siswa->thn_ajaran;?></option>
                                                    <?php for($i=2009;$i<=2100;$i++){$a = $i+1; echo "<option>$i-$a</option>";}?>
                                                </select>
                                            </div>
                                            </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">TTL</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?= $siswa->ttl;?>" name="ttl" id="example-email" class="form-control" placeholder="Tempat">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">No. Handphone</label>
                                            <div class="col-md-10">
                                                <input type="number" value="<?= $siswa->nope;?>" name="nope" class="form-control" placeholder="Nomor Handphone">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Alamat</label>
                                            <div class="col-md-10">
                                                <textarea name="alamat" class="form-control" rows="5"><?= $siswa->alamat;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-2 col-sm-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                                                <a href="<?=site_url('admin/lihatdata/siswa');?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
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

    <?php $this->load->view('admin/layouts/footer'); ?>

</body>
</html>