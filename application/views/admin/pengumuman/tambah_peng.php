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
                <h1 class="page-header">Tambah Data Pengumuman</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">

            <form method="post" action="<?php echo base_url()."Admin/tambah_aksi_peng"; ?>" enctype="multipart/form-data">

          
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">judul</label>
            <div class="col-sm-10">
              <input type="text"  name="judul" class="form-control" id="judul" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">isi pengumuman</label>
            <div class="col-sm-10">
              <input type="text"  name="isi" class="form-control" id="isi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label">upload gambar</label>
            <div class="col-sm-10">
              <input class="form-control" name="foto" type="file" size="20" required>
            </div>
          </div>  
          <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Pengumuman</label>
            <div class="col-sm-10">
              <input type="date"  name="tgl" class="form-control" id="tgl" placeholder="" required="">
            </div>
          </div>

          <br>
          <button type="submit" name="submit" class="btn btn-primary pull-right" value="upload">Save</button>
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

    
        
