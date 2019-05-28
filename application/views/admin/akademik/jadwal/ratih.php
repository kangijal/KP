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
                                <div class="panel-heading"><h3 class="panel-title">Edit Jadwal</h3></div>
                                <div class="panel-body">
                                   
                                    <form method="POST" action="<?= base_url() ?>admin/akademik/simpanjadwal" id="formkelas" class="form-horizontal" role="form">
                                        
                                    <input name="id" value="<?= $jadwal["0"]["id"] ?>" hidden>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Mata Pelajaran</label>
                                            <div class="col-sm-7">
                                             <input class="form-control" readonly value="<?= $jadwal["0"]["nur"] ?>">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Hari</label>
                                            <div class="col-sm-7">
                                            <input class="form-control" readonly value="<?= $jadwal["0"]["ratih"] ?>">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jam</label>
                                            <div class="col-sm-7">
                                            <input class="form-control" readonly value="<?= $jadwal["0"]["alvri"] ?>">
                                            </div>
                                            
                                        </div>

                                            <div class="form-group">
                                            <label class="col-sm-2 control-label">Ganti</label>
                                            <div class="col-sm-7">
                                            <select name="mapel" class="form-control">
        <option value="">Pilih...</option>
        <?php foreach ($mapel as $mapel_value) { ?>
            <option value="<?= $mapel_value["id"] ?>"<?= $mapel_value["id"] === $jadwal["0"]["id_mapel"] ? " selected" : "" ?>><?= $mapel_value["nama_mapel"] ?></option>
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

<!-- <form method="POST" action="<?= base_url() ?>admin/akademik/simpanjadwal">
    <input name="id" value="<?= $jadwal["0"]["id"] ?>" hidden>
    <input readonly value="<?= $jadwal["0"]["nur"] ?>">
    <input readonly value="<?= $jadwal["0"]["ratih"] ?>">
    <input readonly value="<?= $jadwal["0"]["alvri"] ?>">
    <select name="mapel">
        <option value="">Pilih...</option>
        <?php foreach ($mapel as $mapel_value) { ?>
            <option value="<?= $mapel_value["id"] ?>"<?= $mapel_value["id"] === $jadwal["0"]["id_mapel"] ? " selected" : "" ?>><?= $mapel_value["nama_mapel"] ?></option>
        <?php } ?>
    </select>
    <button type="submit">simpan</button>
<form> -->