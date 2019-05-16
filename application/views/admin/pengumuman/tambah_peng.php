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
					<div class="row">
            <div class="col-lg-12">
              <div class="container">
                <div class="panel panel-default">
                  <div class="panel-heading"><h3 class="panel-title">Tambah pengumuman</h3></div>
                  <div class="panel-body">
                  <form action="<?php echo base_url()."admin/pengumuman/tambah_aksi_peng"; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">

          
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">judul</label>
                      <div class="col-sm-10">
                        <input type="text"  name="judul" class="form-control" id="judul" placeholder="">
                      </div>
                    </div>
          <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">isi pengumuman</label>
            <div class="col-sm-10">
              <input type="text"  name="isi" class="form-control" id="isi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group ">
            <label for="gambar" class="col-md-2 control-label">upload gambar</label>
            <div class="col-md-10">
              <input name="foto" type="file">
            </div>
          </div>
          
          <div class="form-group ">
            <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Pengumuman</label>
            <div class="col-sm-6">
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

    
        
