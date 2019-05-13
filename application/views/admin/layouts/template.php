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
                            <h1>Content</h1>
                        <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

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