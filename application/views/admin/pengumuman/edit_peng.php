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
        
          <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Edit Data Siswa</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">

            <form method="post" action="<?php echo base_url()."Admin/edit_aksi_peng"; ?>">

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="hidden"  name="id_pengumuman" class="form-control" id="id_pengumuman" value="<?php echo $id_pengumuman;?>" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text"  name='judul' class="form-control" id="judul" value="<?php echo $judul;?>" placeholder="" required="">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="tempat_lahir" class="col-sm-2 col-form-label">Isi Pengumuman</label>
            <div class="col-sm-10">
              <input type="text"  name="isi" value="<?php echo $isi;?>" class="form-control" id="isi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label">upload gambar</label>
            <div class="col-sm-10">
              <input class="form-control" name="foto" type="file" size="20">
            </div>
          </div>  
          <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input type="date"  name="tanggal" class="form-control" value="<?php echo $tanggal;?>" id="tanggal" placeholder="" required="">
            </div>
          </div>
          

          <br>
          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
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