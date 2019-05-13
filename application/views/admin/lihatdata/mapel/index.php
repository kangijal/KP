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


                                <div class="panel-heading"><h3 class="panel-title">Data Mata Pelajaran</h3></div>
                                <div class="panel-body">
                                    <!-- Isi COntent ====================== -->
                                    <a href="<?=site_url('admin/lihatdata/cetakmapel');?>" class="btn btn-success" style="width: 20%; margin-bottom: 20px" target="_blank">CETAK</a>
                                    <table class="datatables table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Mata Pelajaran</th>
                                                <th>Nama Mata Pelajaran</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1; ?>
                                            <?php foreach($mapel as $sw) : ?>
                                                <tr class="gradeX">
                                                    <td><?= $nomor;?> </td>
                                                    <?php $nomor++;?>
                                                    <td><?= $sw->id; ?>
                                                    </td>
                                                    <td><?= $sw->nama_mapel; ?></td>
                                                    <td class="actions">
                                                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                        <a href="<?= site_url('admin/lihatdata/editmapel/'.$sw->id);?>" class="on-default edit-row"><i class="fa fa-pencil" siswa="<?= $sw->id;?>"></i></a>
                                                        <a href="" class="on-default remove-row"><i class="fa fa-trash-o hapus" siswa="<?= $sw->id;?>"></i></a>
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
                KP 2019
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

<div style="display: none" id="urlhapus" url="<?php echo site_url('admin/lihatdata/destroymapel/');?>"></div>

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
              title: "Yakin?",
              text: "Data yang dihapus tidak bisa dikembalikan",
              type: "warning",
              showCancelButton: true,
              cancelButtonText: "Batal",
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yakin",
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