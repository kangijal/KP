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


                                <div class="panel-heading"><h3 class="panel-title">Data Guru</h3></div>
                                <div class="panel-body">
                                    <!-- Isi COntent ====================== -->

                                    <a href="<?php echo site_url('admin/inputdata/inputguru');?>" class="btn btn-info" style="margin-bottom: 20px">TAMBAH DATA</a>
                                    <a href="<?=site_url('admin/lihatdata/cetakguru');?>" class="btn btn-success" style="margin-bottom: 20px" target="_blank">CETAK</a>
                                    <table class="datatables table table-bordered table-striped" >
                                     <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Guru</th>
                                            <th>Tempat, tgl lahir</th>
                                            <th>Jabatan</th>
                                            <th>JK</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Actions</th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1; ?>
                                        <?php foreach($guru as $sw) : ?>
                                            <tr class="gradeX">
                                                <td><?= $nomor;?> </td>
                                                <?php $nomor++;?>
                                                <td><?= $sw->NIP; ?>
                                                </td>
                                                <td><?= $sw->nama; ?></td>
                                                <td><?= $sw->ttl; ?></td>
                                                <td><?= $sw->jabatan; ?></td>
                                                <td><?= $sw->jk; ?></td>
                                                <td><?= $sw->alamat; ?></td>
                                                <td><?= $sw->nope;?></td>
                                                <td class="actions">
                                                    <a class="btn btn-success" href="<?=site_url('admin/lihatdata/editguru/'.$sw->NIP);?>"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                                                    <a class="btn btn-danger pull-right" href="<?=site_url('admin/lihatdata/destroyguru/'.$sw->NIP);?>"><span class="fa fa-trash" aria-hidden="true"></span></a>
                                                </td>

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

        <footer class="footer text-right">
            2015 © Moltran.
        </footer>

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

<div style="display: none" id="urlhapus" url="<?php echo site_url('admin/lihatdata/destroyguru/');?>"></div>

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