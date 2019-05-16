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
									<h3 class="panel-title">Data Siswa Kelas 6</h3>
								</div>
								<div class="panel-body">
									<table width="100%" class="table table-striped table-bordered" id="tabeldata">
										<thead>
											<tr>
												<th width="80">No</th>
												<th >Nama</th>
												<th>Kelas</th>
												<th width="120">Tahun masuk</th>
												<th width="120"><center>Naik kelas</center></th>
											</tr>
										</thead>
									
										<tbody>
                                        <?php $no = 1; ?>
                                            <?php foreach($siswa as $sw) : ?>
                                                <tr class="gradeX">
                                                    <td><?= $no++;?> </td>
                                                    <td><?= $sw->nama; ?></td>
                                                    <td><?= $sw->kelas; ?></td>
                                                    <td><?= $sw->th_masuk; ?></td>
                                                    <td >
                                                    <select name="kelas" class="form-control">
                                                    <option>tinggal kelas</option>
                                                    <?php foreach($naik as $sw) : ?>
                                                        <option value="<?= $sw->id; ?>"><?= $sw->nama_ruangan;?></option>
                                                    <?php endforeach; ?>
                                                    </select></td>
                                                </tr>
                                            <?php endforeach; ?>									
										</tbody>
									</table>
                                    <button type="submit" class="btn btn-info waves-effect waves-light pull-right">Verifikasi</button>
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