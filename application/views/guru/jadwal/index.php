<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('guru/layouts/header'); ?>
</head>



<body class="fixed-left">

    <div id="wrapper">
        <?php $this->load->view('guru/layouts/top_menu');?>
        <?php $this->load->view('guru/layouts/sidebar');?>

        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
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

                                <!-- <a href="<?= site_url('admin/akademik/tambahjadwal');?>">tambah jadwal</a> -->
                                <div class="panel-heading"><h3 class="panel-title">Cari Jadwal</h3></div>
                                <div class="panel-body">
                                   
                                    <form action="<?= site_url('admin/akademik/carijadwalkelas');?>" method="POST" id="formkelas" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kelas</label>
                                            <div class="col-sm-7">
                                                <select name="kelas" class="form-control">
                                                    <option></option>
                                                    <?php foreach($kelas as $ks) : ?>
                                                        <option value="<?= $ks->id;?>"><?= $ks->nama_ruangan;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Cari</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> <!-- End row -->
                </div>
            </div> <!-- content -->
        </div>
    </div>
    <!-- END wrapper -->


</body>
</html>