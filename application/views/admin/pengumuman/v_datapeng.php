<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url('Admin/tampil_guru')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Guru</span></a></li>
						<li><a href="<?php echo base_url('Admin/tampil_siswa')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Siswa</span></a></li>
						<li><a href="<?php echo base_url('Admin/tampil_tahun')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Tahun Ajaran</span></a></li>
						<li><a href="<?php echo base_url('Admin/tampil_kelas')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Kelas</span></a></li>
						<li><a href="<?php echo base_url('Admin/tampil_peng')?>" class="active"><i class="lnr lnr-dice"></i> <span>Data Pengumuman</span></a></li>
						
						<li><a href="<?php echo base_url('Admin/tampil_ber')?>" class=""><i class="lnr lnr-dice"></i> <span>Data Berita</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url('C_report/tampil_guru')?>" class="">Laporan Data Guru</a></li>
									<li><a href="<?php echo base_url('C_report/tampil_siswa')?>" class="">Laporan Data Siswa</a></li>
									<li><a href="<?php echo base_url('C_report/tampil_kelas')?>" class="">Laporan Data Kelas</a></li>
								</ul>
							</div>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
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
												foreach ($pengumuman as $p) {?>
													
												<td><?php echo $no++;?></td>
												<td><?php echo $p->judul;?></td>
												<td><?php echo $p->isi;?></td>
												<td><?php echo $p->tanggal;?></td>
												<td><img src="<?php echo base_url().'assets/img/upload/'.$p->gambar;?>" class="img-thumbnail" style="width:500; height: 500;" alt="Image"/></td>
												
												<td><center>
													<a href="<?php echo base_url()."admin/pengumuman/delete_peng/".$p->id_pengumuman;?>" class="btn-xs btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
                									<a href="<?php echo base_url()."admin/pengumuman/edit_peng/".$p->id_pengumuman;?>" class="btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												</center></td>
												
											</tr>
											<?php }?>
											
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