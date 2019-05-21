<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/layouts/header'); ?>
</head>



<body class="fixed-left">

    <div id="wrapper">
        <?php $this->load->view('admin/layouts/top_menu');?>
        <?php $this->load->view('admin/layouts/sidebar');?>

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
                                <!-- <div>
                                
                                <a href="<?= site_url('admin/akademik/tambahjadwal');?>">tambah jadwal</a>
                                </div> -->
                                <div class="panel-heading"><h3 class="panel-title">Tambah Jadwal</h3></div>
                                <div class="panel-body">
                                   
                                    <form action="<?= base_url() ?>admin/akademik/tambahjadwalsimpan" method="POST" id="formkelas" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kelas</label>
                                            <div class="col-sm-7">
                                            <select name="kelas" class="form-control">
                                                <option value="">Pilih...</option>
                                                <?php foreach ($kelas as $kelas_value) { ?>
                                                    <option value="<?= $kelas_value["id"] ?>"><?= $kelas_value["nama_ruangan"] ?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Mata Pelajaran</label>
                                            <div class="col-sm-7">
                                            <select name="mapel" class="form-control">
                                                <option value="">Pilih...</option>
                                                    <?php foreach ($mapel as $mapel_value) { ?>
            <option value="<?= $mapel_value["id"] ?>"><?= $mapel_value["nama_mapel"] ?></option>
        <?php } ?>
    </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Hari</label>
                                            <div class="col-sm-7">
                                            <select name="hari" class="form-control">
        <option value="">Pilih...</option>
        <?php foreach ($hari as $hari_value) { ?>
            <option value="<?= $hari_value["id"] ?>"><?= $hari_value["hari"] ?></option>
        <?php } ?>
    </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jam</label>
                                            <div class="col-sm-7">
                                            <select name="jam" class="form-control">
        <option value="">Pilih...</option>
        <?php foreach ($jam as $jam_value) { ?>
            <option value="<?= $jam_value["id"] ?>"><?= $jam_value["waktu"] ?></option>
        <?php } ?>
    </select>
                                            </div>
                                            
                                        </div>
                                        <div  align="center">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">simpan</button>
                                            </div>
                                    </form>

                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div>                        
                    </div> <!-- End row -->
                </div>
            </div> <!-- content -->
        </div>
    </div>
    <!-- END wrapper -->


    <?php $this->load->view('admin/layouts/footer'); ?>
    
</body>
</html>