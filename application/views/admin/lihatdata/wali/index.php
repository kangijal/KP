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


                                <div class="panel-heading"><h3 class="panel-title">Data Wali Kelas</h3></div>
                                <div class="panel-body">
                                    <!-- Isi COntent ====================== -->
                                    <a href="<?php echo site_url('admin/inputdata/inputwalikelas');?>" class="btn btn-info" style="margin-bottom: 20px;">TAMBAH DATA</a>
                                    <a href="<?=site_url('admin/lihatdata/cetakwali');?>" target="_blank" class="btn btn-success" style="margin-bottom: 20px;">CETAK</a>
                                    <table class="datatables table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Guru</th>
                                                <th>Nama Kelas</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1; ?>
                                            <?php foreach($wali as $sw) : ?>
                                                <tr class="gradeX">
                                                    <td><?= $nomor;?> </td>
                                                    <?php $nomor++;?>
                                                    <td><?= $sw->nama; ?>
                                                    </td>
                                                    <td><?= $sw->nama_ruangan; ?></td>
                                                    <td><?= $sw->thn_ajaran; ?></td>
                                                    <td class="actions">
                                                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                        <!-- <a href="<?= site_url('admin/lihatdata/editwali/'.$sw->id);?>" class="on-default edit-row"><i class="fa fa-pencil" siswa="<?= $sw->id;?>"></i></a> -->
                                                        <a class="btn btn-danger" href="<?= site_url('admin/lihatdata/destroywali/'.$sw->id);?>" class="on-default remove-row"><i class="fa fa-trash" siswa="<?= $sw->id;?>"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> 
                </div> <!-- container -->

            </div>
            <footer class="footer text-right">
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

<div style="display: none" id="urlhapus" url="<?php echo site_url('admin/lihatdata/destroysiswa/');?>"></div>

<div style="display: none" id="urledit" url="<?php echo site_url('admin/lihatdata/editsiswa/');?>"></div>

</div>
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