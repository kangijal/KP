<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url('assets/blue/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/waves.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/wow.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/blue/js/jquery.scrollTo.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/chat/moment-2.2.1.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/jquery-sparkline/jquery.sparkline.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/jquery-detectmobile/detect.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/fastclick/fastclick.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/jquery-blockui/jquery.blockUI.js');?>"></script>

<!-- sweet alerts -->
<script src="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.init.js');?>"></script>


<!-- Counter-up -->
<script src="<?php echo base_url('assets/blue/assets/counterup/waypoints.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/blue/assets/counterup/jquery.counterup.min.js');?>" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="<?php echo base_url('assets/blue/js/jquery.app.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/timepicker/bootstrap-timepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/timepicker/bootstrap-datepicker.js');?>"></script>


<!-- Dashboard -->
<script src="<?php echo base_url('assets/blue/js/jquery.dashboard.js');?>"></script>

<!-- Chat -->
<script src="<?php echo base_url('assets/blue/js/jquery.chat.js');?>"></script>

<!-- Todo -->
<script src="<?php echo base_url('assets/blue/js/jquery.todo.js');?>"></script>

<!-- Datatables -->
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.js');?>"></script>

<!--Form Validation-->
<script src="<?php echo base_url('assets/blue/assets/form-wizard/bootstrap-validator.min.js');?>" type="text/javascript"></script>

<!--Form Wizard-->
<script src="<?php echo base_url('assets/blue/assets/form-wizard/jquery.steps.min.js');?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets/blue/assets/jquery.validate/jquery.validate.min.js');?>"></script>

<!--wizard initialization-->
<script src="<?php echo base_url('assets/blue/assets/form-wizard/wizard-init.js');?>" type="text/javascript"></script>


<script type="text/javascript">
    /* ==============================================
    Counter Up
    =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.datatables').DataTable();

        $('#ddtt').datepicker({
            format: 'dd-mm-yyyy',
        });
    });
</script>