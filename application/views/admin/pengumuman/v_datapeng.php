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
						<div class="col-md-12">
							<div class="panel panel-default">

								<div class="panel-heading">
									<h3 class="panel-title">Data Pengumuman</h3>
								</div>
								<div class="panel-body">
									<a  href="<?php echo base_url()."admin/pengumuman/tambah_peng";?>" class="btn btn-success" style="margin-bottom: 20px;"><i aria-hidden="true">TAMBAH PENGUMUMAN</i></a>
            						
									<table class=" table table-bordered table-striped" id="dataTables">
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
												
												<td width="100">
                									<a href="<?php echo base_url().'admin/pengumuman/edit_peng/'.$p->id_pengumuman;?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													<a href="<?php echo base_url().'admin/pengumuman/delete_peng/'.$p->id_pengumuman;?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</td>
												
											</tr>
											<?php endforeach; ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>

    </div>
</div>

<?php $this->load->view('admin/layouts/footer'); ?>

</body>
</html>
