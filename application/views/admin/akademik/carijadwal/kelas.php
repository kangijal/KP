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
                        <div class="col-sm-12">
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


                                <div class="panel-heading"><h3 class="panel-title">Jadwal Pelajaran</h3></div>
                                <div class="panel-body" align="center">
                                    <!-- Isi COntent ====================== -->
                                    <h2>HARI SENIN</h2>

                                    <table class="table table-bordered table-striped">
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
                                                <td><button href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>">Edit</button></td>
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
                                                <td><button href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>">Edit</button></td>
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
                                                <td><button href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>">Edit</button></td>
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
                                                <td><button href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>">Edit</button></td>
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
                                                <td><button href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>">Edit</button></td>
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
                                                <td><button href="<?=site_url('admin/akademik/editjadwal/'.$sw->id);?>">Edit</button></td>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>

                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> <!-- End row -->
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div style="display: none" id="urlhapus" url="<?php echo site_url('admin/akademik/destroyjadwal/');?>"></div>

<div style="display: none" id="urledit" url="<?php echo site_url('admin/lihatdata/editsiswa/');?>"></div>

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->

<!-- /Right-bar -->

</div>
<!-- END wrapper -->



<?php $this->load->view('admin/layouts/footer'); ?>

<script>
    $(document).ready(function(){
        $('.hapus').click(function(e) {
            var id = $(this).attr('siswa');
            e.preventDefault();
            swal({
              title: "Are you sure?",
              text: "You will not be able to recover this imaginary file!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
          },
          function(){
            var url = $('#urlhapus').attr('url');

            window.location.href = url + '/' + id;
        });
        });
    });
</script>

</body>
</html>