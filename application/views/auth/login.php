<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo base_url('assets/blue/images/favicon_1.ico');?>">

    <title>Login SDN 2 Pedes</title>

    <link href="<?php echo base_url('assets/blue/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/blue/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/blue/css/animate.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/blue/css/waves-effect.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/blue/css/helper.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/blue/css/style.css');?>" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url('assets/blue/js/modernizr.min.js');?>"></script>
        
    </head>
    <body >


        <div class="wrapper-page">
            <div class="panel panel-primary panel-pages">
                <div class="panel-heading bg-img" align="center">
                <div class="pull-left image"></div> 
                     <a  class="logo" class="img-circle" ><img style=" width: 150px " src="<?php echo base_url('assets/blue/images/icon_sd.png');?>"> </a>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal" action="<?= site_url('auth/cek_login');?>" method="POST" >

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control input-lg " type="text" name=username id="username" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control input-lg" name=password id="password" type="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" class="tampil" type="checkbox">
                                <label for="checkbox-signup">
                                    Tampilkan Password
                                </label>
                            </div>                            
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" name="submit" type="submit" value=Submit>Log In</button>
                            </div>
                        </div>                        
                    </form> 
                </div>                                 
                
            </div>
        </div>

        
        <script>
            var resizefunc = [];
        </script>
        <script src="<?php echo base_url('assets/blue/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/waves.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/wow.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-detectmobile/detect.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-blockui/jquery.blockUI.js');?>"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('assets/blue/js/jquery.app.js');?>"></script>

        <script>
            $(document).ready(function(){
                $('.tampil').click(function(){
                    if($(this).is(':checked'))
                    {
                        $('#formpasswd').attr('type','text');
                    }
                    else
                    {
                        $('#formpasswd').attr('type','password');
                    }
                });
            });
        </script>

    </body>
    </html>