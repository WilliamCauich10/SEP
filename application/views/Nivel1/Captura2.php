<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Captura </title>

    <!-- Bootstrap si-->
    <link href="/SEP/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome si -->
    <link href="/SEP/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/SEP/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/SEP/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/SEP/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/SEP/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/SEP/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/SEP/build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/SEP/img/Icono.png">
  </head>

  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-user"></i> <span><?= $usr?></span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?= $usr?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/SEP/index.php/Niv1/Inicio/<?= $usr ?>"><i class="fa fa-home"></i>Inicio </a> </li>
                  <li><a href="#"><i class="fa fa-search"></i> Buscar </a> </li>
                  <li><a href="#"><i class="fa fa-cloud-upload"></i> Subir Archivos </a> </li>
                  <li><a><i class="fa fa-cloud-download"></i> Descargas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Escuelas</a></li>
                      <li><a href="#">Docentes</a></li>
                      <li><a href="#">alumnos</a></li>
                    </ul>
                  </li>
              </div>

            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="/SEP">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?= $usr ?>  <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="/SEP"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <h1>Parte de insertar wil</h1>
<!-- <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#Estudiantes">Estudiantes</button> -->
<!-- <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#Docentes">Docentes</button> -->
<!-- <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#Directivos">Directivos</button> -->
<!-- <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#Escuelas">Escuelas</button> -->
<!--  -->
<div class="panel-group" id="accordion">
  <div class="panel panel-default" style="border-color: white;" >
    <div class="panel-heading" style="background: white;">
    <a data-toggle="collapse" data-parent="#accordion" href="#Estudiantes">
    <button type="button" class="btn btn-warning">Estudiantes</button></a>
    </div>
<!--  estudiantes -->
  <div id="Estudiantes" class="collapse">
    <form action="importar" enctype="multipart/form-data" method="post">
       <input id="archivo" accept=".csv" name="archivo" type="file" /> 
       <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> 
       <input name="enviar" type="submit" value="Subir" />
       <a  data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
    </form>
  </div>
</div>
<div class="panel panel-default" style="border-color: white;" >
    <div class="panel-heading" style="background: white;">
    <a data-toggle="collapse" data-parent="#accordion" href="#Docentes">
    <button type="button" class="btn btn-warning">Docentes</button></a>
    </div>
    <!-- docentes -->
  <div id="Docentes" class="collapse">
    <form action="importar2" enctype="multipart/form-data" method="post">
       <input id="archivo" accept=".csv" name="archivo" type="file" /> 
       <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> 
       <input name="enviar" type="submit" value="Importar" />
       <a data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
   </form>
  </div>
</div>
<div class="panel panel-default" style="border-color: white;" >
    <div class="panel-heading" style="background: white;">
    <a data-toggle="collapse" data-parent="#accordion" href="#Directivos">
    <button type="button" class="btn btn-warning">Directivos</button></a>
    </div>
    <!-- directivos -->
  <div id="Directivos" class="collapse">
    <form action="importar3" enctype="multipart/form-data" method="post">
       <input id="archivo" accept=".csv" name="archivo" type="file" /> 
       <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> 
       <input name="enviar" type="submit" value="Importar" />
       <a data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
   </form>
  </div>
</div>
<div class="panel panel-default" style="border-color: white;" >
    <div class="panel-heading" style="background: white;">
    <a data-toggle="collapse" data-parent="#accordion" href="#Escuelas">
    <button type="button" class="btn btn-warning">Escuelas</button></a>
    </div>
    <!-- escuelas -->
  <div id="Escuelas" class="collapse">
    <form action="importar4" enctype="multipart/form-data" method="post">
       <input id="archivo" accept=".csv" name="archivo" type="file" /> 
       <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> 
       <input name="enviar" type="submit" value="Importar" />
       <a data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
   </form>
  </div>
  </div>
  </div>
  <!--  -->
  </div>
        <!-- footer content -->
        <footer>
          <div class="pull-center">
            <center>
              <p>Av. Armada de México N° 176</p>
          <p>Esq. Presa de la Amistad Col. Campestre C.P. 77040  Chetumal, Q. Roo.</p>
          <p>Teléfono:(01 983) 832 79 25 Fax: 832 32 91</p>
          <p> <a href="delegacion.qroo@nube.sep.gob.mx">delegacion.qroo@nube.sep.gob.mx</a></p>
            </center>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/SEP/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/SEP/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/SEP/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/SEP/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/SEP/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/SEP/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/SEP/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/SEP/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/SEP/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/SEP/vendors/Flot/jquery.flot.js"></script>
    <script src="/SEP/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/SEP/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/SEP/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/SEP/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/SEP/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/SEP/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/SEP/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/SEP/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/SEP/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/SEP/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/SEP/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/SEP/vendors/moment/min/moment.min.js"></script>
    <script src="/SEP/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/SEP/build/js/custom.min.js"></script>
  
  </body>
</html>
