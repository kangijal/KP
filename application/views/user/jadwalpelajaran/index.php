<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('user/layouts/header');?>
</head>
<body class="fixed-left">
  <div id="wrapper">

    <?php $this->load->view('user/layouts/top_menu');?>

    <!-- Left side column. contains the logo and sidebar -->
    
    <?php $this->load->view('user/layouts/sidebar');?>

    <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
   
                            <div class="panel-heading"><h3 class="panel-title">Jadwal Pelajaran</h3></div>
                                <div class="panel-body" align="center">

                                <h1 style="text-align: center;">Jadwal Pelajaran Kelas <?= $cek_kelas->nama_ruangan;?></h1>

                                  <div class="box-body">
                                  <h2>HARI SENIN</h2>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>JAM</th>
                                                <th>MAPEL</th>
                                                <!-- <th>AKSI</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($senin as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <!-- <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button>
                                                </td> -->
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
                                                <!-- <th>AKSI</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($selasa as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <!-- <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button> -->
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
                                                <!-- <th>AKSI</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($rabu as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <!-- <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button> -->
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
                                                <!-- <th>AKSI</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($kamis as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <!-- <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button> -->
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
                                                <!-- <th>AKSI</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($jumat as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <!-- <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button> -->
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
                                                <!-- <th>AKSI</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php foreach($sabtu as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $sw->waktu; ?></td>
                                                <td><?= $sw->nama_mapel; ?></td>
                                                <!-- <td><a href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>" role="button" class="btn btn-primary btn-sm" >Edit</button> -->
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>    
                                  </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> <!-- End row -->
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->
        </div>
    
    
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('user/layouts/footer');?>
</body>
</html>
