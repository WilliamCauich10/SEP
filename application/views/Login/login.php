<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/SEP/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/SEP/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/SEP/assets/css/form-elements.css">
        <link rel="stylesheet" href="/SEP/assets/css/style.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/SEP/img/iconoSEP.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/SEP/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/SEP/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/SEP/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/SEP/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    <!-- Variables input php -->
<?php 
    $Usr = array('name'=>'txtUsr','id'=>'txtUsr','class'=>'form-username form-control','placeholder'=>'Usuario...');
    $Pw = array('name'=>'txtPw','id'=>'txtPw','type'=>'password','class'=>'form-password form-control','placeholder'=>'Contraseña...');
    $attributes = array('class' => 'login-form');
?>
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Secretaria de Educación Publica</strong></h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Inicie Sesion para continuar</h3>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                            <?= form_open("/Login/comprobar",$attributes) ?>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Usuario</label>
                                        <?= form_input($Usr) ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Contraseña</label>
                                        <?= form_input($Pw) ?>
                                    </div>
                                    <button type="submit" class="btn">Iniciar</button>
                                <?= form_close() ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="/SEP/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/SEP/assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- <script src="/SEP/assets/js/jquery.backstretch.min.js"></script> -->
        <script src="/SEP/assets/js/scripts.js"></script>
<!-- <img src="/SEP/img/SEPbanner.png"> -->

        <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 790px; width: 106%; z-index: -999999; position: fixed;"><img src="/SEP/assets/img/backgrounds/1.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -9; left: -90px; top: 0px;">
        <img src="/SEP/img/SEPbanner.png" style="width: 1460px;">
        </div>
       <!--  <img src="/SEP/img/SEPbanner.png"> -->
    </body>

</html>