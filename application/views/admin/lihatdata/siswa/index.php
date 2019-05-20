<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/layouts/header'); ?>
</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <?php $this->load->view('admin/layouts/top_menu');?>
        <?php $this->load->view('admin/layouts/sidebar');?>

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


                                <div class="panel-heading"><h3 class="panel-title">Data Siswa</h3></div>
                                <div class="panel-body">
                                    <!-- Isi COntent ====================== -->

                                        <a href="<?php echo site_url('admin/siswa/create');?>" class="btn btn-info" style=" margin-bottom: 20px;">TAMBAH DATA</a>
                                        <a href="<?=site_url('admin/lihatdata/cetaksiswa');?>" class="btn btn-success" style=" margin-bottom: 20px;">CETAK</a>
                                        <table class="datatables table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIS</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tahun Masuk</th>
                                                    <th>Tempat tgl lahir</th>
                                                    <th>No. Handphone</th>
                                                    <th>Alamat</th>
                                                    <th>Actions</th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $nomor = 1; ?>
                                                <?php foreach($siswa as $sw) : ?>
                                                    <tr class="gradeX">
                                                        <td><?= $nomor;?> </td>
                                                        <?php $nomor++;?>
                                                        <td><?= $sw->nis; ?>
                                                        </td>
                                                        <td><?= $sw->nama; ?></td>
                                                        <td><?= $sw->kelas; ?></td>
                                                        <td><?= $sw->jk; ?></td>
                                                        <td><?= $sw->th_masuk; ?></td>
                                                        <td><?= $sw->ttl; ?></td>
                                                        <td><?= $sw->nope; ?></td>
                                                        <td><?= $sw->alamat; ?></td>
                                                        <td class="actions">
                                                            <a class="btn btn-success" href="<?=site_url('admin/lihatdata/editsiswa/'.$sw->nis);?>"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                                                            <a class="btn btn-danger" href="<?=site_url('admin/lihatdata/destroysiswa/'.$sw->nis);?>"><span class="fa fa-trash" aria-hidden="true"></span></a>
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

    <div style="display: none" id="urlhapus" url="<?php echo site_url('admin/lihatdata/destroysiswa/');?>"></div>

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