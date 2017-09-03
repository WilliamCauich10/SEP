<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Delegado </title>

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
      <!-- FullCalendar -->
    <link href="/SEP/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/SEP/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
  </head>

  <body class="nav-md">
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
                <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
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
                  <li><a href="/SEP/index.php/Niv4/Inicio/<?= $usr ?>"><i class="fa fa-home"></i>Inicio </a> </li>
                  <li><a href="/SEP/index.php/Niv4/Indicadores/<?= $usr ?>"><i class=" fa fa-file-text"></i>Indicadores</a></li>
                  <li><a><i class="fa fa-search"></i> Filtrar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li>
                      <?= form_open("Niv4/FiltrosEscuelas") ?>
                        <label>Esculas</label>
                        <select name="FiltroEsculas" style="width: 182px;">
                            <option value="todos">All</option>
                            <?php 
                              $queryEscuelaFiltro = $this-> db->where('NivelEducativo',"Media Superior");
                              $queryEscuelaFiltro = $this-> db->or_where('NivelEducativo',"Superior");
                              $queryEscuelaFiltro = $this-> db->or_where('NivelEducativo',"Basica");
                              $queryEscuelaFiltro = $this -> db -> get('usuarios');
                              foreach ($queryEscuelaFiltro -> result() as $queryEscuelaFiltro) { ?>
                                <option value="<?= $queryEscuelaFiltro -> Nombre; ?>"><?= $queryEscuelaFiltro -> Nombre; ?></option>
                              
                              <?php } ?>
                        </select>
                        <button type="Submit">Buscar</button>
                        <input type="text" name="user" style="visibility: hidden;" value="<?= $usr ?>">
                        <?= form_close() ?>
                      </li>
                      <li>
                        <?= form_open("Niv4/FiltrosNiveles") ?>
                        <label>Niveles Educativos</label>
                        <select name="FiltroNivel" style="width: 182px;">
                            <option value="todosniv">All</option>
                            <?php 
                              $queryEscuelaFiltro = $this-> db->where('NivelEducativo',"Media Superior");
                              $queryEscuelaFiltro = $this-> db->or_where('NivelEducativo',"Superior");
                              $queryEscuelaFiltro = $this-> db->or_where('NivelEducativo',"Basica");
                              $queryEscuelaFiltro = $this-> db->group_by('NivelEducativo');
                              $queryEscuelaFiltro = $this -> db -> get('usuarios');
                              foreach ($queryEscuelaFiltro -> result() as $queryEscuelaFiltro) { ?>
                                <option value="<?= $queryEscuelaFiltro -> NivelEducativo; ?>"><?= $queryEscuelaFiltro -> NivelEducativo; ?></option>
                              
                              <?php } ?>
                        </select>
                        <button type="Submit">Buscar</button>
                        <input type="text" name="user" style="visibility: hidden;" value="<?= $usr ?>">
                        <?= form_close() ?>
                      </li>
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
                    <!-- <img src="images/img.jpg" alt=""> -->
                    <i class="fa fa-user"></i>
                    <?= $usr ?>  <span class=" fa fa-angle-down"></span>
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
          <h1><?= $nom ?></h1>
          <table class="table table-striped" style="width: 1000px; font-size: 17px;"  >
            <thead>
              <tr>
                <th>Indicador</th>
                <th style=" width:150px;">Formula</th>
               <?php 
                    $queryAño = $this -> db -> get('años');
                    foreach ($queryAño -> result() as $queryAño) { ?>
                    
                      <th style=" width:70px;"><?= $queryAño -> Años; ?></th>
                    
                    <?php }
                  ?>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php 
                  $queryIndicador = $this -> db -> get('indicadores');
                    foreach ($queryIndicador -> result() as $queryIndicador) {
               ?>
                <td><?= htmlentities($queryIndicador -> Nombre) ?></td>
                <td><?= $queryIndicador -> Forma_de_Calculo; ?></td>
                   <?php 
                      $queryAño2 = $this -> db -> get('años');
                    foreach ($queryAño2 -> result() as $queryAño2) {
                        $año = $queryAño2 -> Años;
                      $queryValor = $this-> db->where('Nombre',$queryIndicador -> Nombre);
                      $queryValor = $this-> db->where('Año',$queryAño2 -> Años);
                      $queryValor = $this-> db->where('User',$nom);
                      $queryValor = $this -> db -> get('IndAño');
                      if ($queryValor -> num_rows()>0){
                      foreach ($queryValor -> result() as $queryValor) {?>
                        <td align="center"><?= $queryValor -> Valor; ?></td>
                      <?php } 
                      } else{ 
                    ?>
                      <td align="center">-</td>
                    <?php }
                      }
                    
                     ?>
              </tr>
                <?php } ?>
            </tbody>
          </table>

           <center>
      <table>
        <tr>
          <?= form_open("DercargaPDF/Descarga") ?>
           <input type="text" name="user" style="visibility: hidden;" value="<?= $nom ?>">
          <td>
            <button type="Submit" class="btn btn-round btn-primary"><i class="fa fa-print"></i> Dercargar PDF <i class="fa fa-file-pdf-o"></i></button>
          </td>
          <?= form_close() ?>
          <?= form_open("DescargaEXCEL/Descarga") ?>
            <input type="text" name="user" style="visibility: hidden;" value="<?= $nom ?>">
          <td>
            <button type="Submit" class="btn btn-round btn-primary"><i class="fa fa-print"></i> Dercargar Excel <i class="fa fa-file-excel-o"></i></button>
          </td>
          <?= form_close() ?>
        </tr>
      </table>
    </center> 
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
 <!-- FullCalendar -->
    <script src="/SEP/vendors/moment/min/moment.min.js"></script>
    <script src="/SEP/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/SEP/build/js/custom.min.js"></script>
  
  </body>
</html>
