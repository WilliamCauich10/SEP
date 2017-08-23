<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin </title>

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
                  <li><a href="/SEP/index.php/Niv3/Inicio/<?= $usr ?>"><i class="fa fa-home"></i>Inicio </a> </li>
                  <li><a href="#"><i class="fa fa-search"></i> Fechas <span class="fa fa-chevron-down"></span></a> 
                    <ul class="nav child_menu">
                      <li><a href="/SEP/index.php/Niv3/crearFecha/<?= $usr ?>"> Agregar </a></li>
                      <li><a href="/SEP/index.php/Niv3/editarFecha/<?= $usr ?>"> Editar </a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-search"></i> Indicador <span class="fa fa-chevron-down"></span></a> 
                    <ul class="nav child_menu">
                      <li><a href="/SEP/index.php/Niv3/crearInd/<?= $usr ?>"> Agregar </a></li>
                      <li><a href="/SEP/index.php/Niv3/editarInd/<?= $usr ?>"> Editar </a></li>
                    </ul>
                  </li>
                  <!-- <li><a href="/SEP/index.php/Niv1/Captura2/<?= $usr ?>"><i class="fa fa-cloud-upload"></i> Subir Archivos </a> </li> -->
                  <li><a><i class="fa fa-cloud-download"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/SEP/index.php/Niv3/Crear/<?= $usr ?>"> Agregar </a></li>
                      <li><a href="/SEP/index.php/Niv3/Editar/<?= $usr ?>"> Editar </a></li>
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendar <small>Click to add/edit events</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Calendar Events <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id='calendar'></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
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

    <!--  -->

    <!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title2" name="title2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
<!--  -->
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
