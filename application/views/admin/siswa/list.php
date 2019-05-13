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


                                <div class="panel-heading"><h3 class="panel-title">Tambah Siswa</h3></div>
                                <div class="panel-body">
                                    <!-- Isi COntent ====================== -->

                                    <table class="datatables table table-bordered table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
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
                                                    <td><?= $sw->nik; ?>
                                                    </td>
                                                    <td><?= $sw->nama; ?></td>
                                                    <td><?= $sw->alamat; ?></td>
                                                    <td class="actions">
                                                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->

        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <?php $this->load->view('admin/layouts/footer'); ?>

</body>
</html>