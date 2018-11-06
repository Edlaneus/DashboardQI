<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estacionamientos</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <script src="js/modernizr.min.js"></script>

        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Crear una cuenta </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="index.php/Cestacion/newUsuario" method="POST">
                    <div class="form-group">
                        <div class="col-xs-12">
                            Nombre:
                            <input type="text" name="nom" class="form-control" placeholder="Nombre completo del usuario" value="<?php echo set_value('nom'); ?>">
                            <span class="error"><?php echo form_error('nom'); ?></span>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            Correo electronico:
                            <input type="text" name="correo" class="form-control" placeholder="usuario@dominio.com" value="<?php echo set_value('correo'); ?>">
                            <span class="error"><?php echo form_error('correo'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            Clave:
                        <input type="password" name="clave" class="form-control" placeholder="Clave" value="<?php echo set_value('clave'); ?>">
                        <span class="error"><?php echo form_error('clave'); ?></span>                        
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            Confirmar clave:
                        <input type="password" name="confclave" class="form-control" placeholder="Clave" value="<?php echo set_value('confclave'); ?>"> 
                        <span class="error"><?php echo form_error('confclave'); ?></span>                     
                    </div>
                    </div>
                  
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-success waves-effect waves-light btn-lg w-lg" type="submit">Registrar</button>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>



        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/chat/moment-2.2.1.js"></script>
        <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

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
  </body>
</html>