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
                  <div class="panel-heading"><h3 class="panel-title">Edit pengumuman</h3></div>
                  <div class="panel-body">

                  <form method="post" action="<?php echo base_url()."admin/pengumuman/edit_aksi_peng"; ?>" class="form-horizontal" enctype="multipart/form-data">

                  <div class="form-group">
            <label for="nama" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
              <input type="hidden"  name="id_pengumuman" class="form-control" id="id_pengumuman" value="<?php echo $id_pengumuman;?>" placeholder="">
            </div>
          </div>
          <div class="form-group ">
            <label for="nama" class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
              <input type="text"  name='judul' class="form-control" id="judul" value="<?php echo $judul;?>" placeholder="" required="">
            </div>
          </div>
          
          <div class="form-group ">
            <label for="tempat_lahir" class="col-sm-2 control-label">Isi Pengumuman</label>
            <div class="col-sm-10">
              <input type="text"  name="isi" value="<?php echo $isi;?>" class="form-control" id="isi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group ">
            <label for="gambar" class="col-md-2 control-label">upload gambar</label>
            <div class="col-md-10">
              <input name="foto" type="file" >
            </div>
          </div>  
          <div class="form-group ">
            <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal</label>
            <div class="col-sm-10">
              <input type="text" id="ddtt" name="tanggal" class="form-control" placeholder="" required="">
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