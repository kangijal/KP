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
			<!-- MAIN CONTENT -->
			<div class="content">
				<div class="container">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">

								<div class="panel-heading">
									<h3 class="panel-title">Data Pengumuman</h3>
								</div>
								<div class="panel-body">
									<div class="text-right"><a  href="<?php echo base_url()."admin/pengumuman/tambah_peng";?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            						<br>
									<table width="100%" class="table table-striped table-bordered" id="tabeldata">
										<thead>
											<tr>
												<th>#</th>
												<th width="100">Judul</th>
												<th>Isi Pengumuman</th>
												<th>Tanggal</th>
												<th>Gambar</th>
												<th width="80"><center>Aksi</center></th>
											</tr>
										</thead>
									
										<tbody>
											<tr>

												<?php 
												$no = 1;
												foreach ($pengumuman as $p):?>
													
												<td><?php echo $no++;?></td>
												<td><?php echo $p->judul;?></td>
												<td><?php echo $p->isi;?></td>
												<td><?php echo $p->tanggal;?></td>
												<td><img src="<?php echo base_url().'assets/img/upload/'.$p->gambar;?>" class="img-thumbnail" style="width:500; height: 500;" alt="Image"/></td>
												
												<td><center>
													<a href="<?= site_url('admin/pengumuman/delete_peng/'.$p->id_pengumuman);?>" class="btn-xs btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
                									<a href="<?= site_url('admin/pengumuman/edit_peng/'.$p->id_pengumuman);?>" class="btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												</center></td>
												
											</tr>
											<?php endforeach; ?>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
						
							<!-- END CONDENSED TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>

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
