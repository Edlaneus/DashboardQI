<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Q Inventiva</title>

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/modernizr.min.js"></script>

<div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Iniciar Sesión </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="index.php/Cestacion/valida" method="POST">
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            Correo electronico:
                            <input class="form-control" type="text" name="correo" placeholder="usuario@dominio.com">
                            <span class="error"><?php echo form_error('correo'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            Contraseña:
                            <input class="form-control input-lg" type="password" name="clave" placeholder="Password">
                            <span class="error"><?php echo form_error('clave'); ?></span>
                        </div>
                    </div>
<!-- 
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Recordarme
                                </label>
                            </div>
                            
                        </div>
                    </div> -->
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-8 text-right">
                            <a href="index.php/Cestacion/nvoUsuario">Crear una cuenta</a>
                        </div>
                    </div>
                </form>
                <br>
                <?php
                    if(isSet($mensaje))
                    {
                    echo $mensaje;
                    }
                ?> 
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