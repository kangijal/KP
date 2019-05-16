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
                                <div class="panel-heading"><h3 class="panel-title">Cari Jadwal</h3></div>
                                <div class="panel-body">
                                   
                                    <form action="<?= site_url('admin/akademik/jadwal');?>" method="POST" id="formkelas" class="form-horizontal" role="form">
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
                                                <button type="button" class="btn btn-success">Tambah jadwal<a href="<?= site_url('admin/akademik/tambahjadwal');?>"></a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title">Jadwal Pelajaran</h3></div>
                                <div class="panel-body" align="center">
                                    <!-- Isi COntent ====================== -->
                                    <h2>HARI SENIN</h2>

                                    <table class="table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>JAM</th>
                                                <th>MAPEL</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($senin as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                    <h2>HARI SELASA</h2>
                                    <table class="table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>JAM</th>
                                                <th>MAPEL</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($selasa as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                    <h2>HARI RABU</h2>
                                    <table class="table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>JAM</th>
                                                <th>MAPEL</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($rabu as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                    <h2>HARI KAMIS</h2>
                                    <table class="table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>JAM</th>
                                                <th>MAPEL</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($kamis as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                    <h2>HARI JUM'AT</h2>
                                    <table class="table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>JAM</th>
                                                <th>MAPEL</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($jumat as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                    <h2>HARI SABTU</h2>
                                    <table class="table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>JAM</th>
                                                <th>MAPEL</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($sabtu as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>

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