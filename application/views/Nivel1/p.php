<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SEP </title>

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

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span><?= $usr?></span></a>
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
        <!--  -->
        <!-- <fieldset class="scheduler-border" style="position: relative; left: 250px;bottom: 130px;"> -->

		<table class="table table-striped" style="width: 1000px; font-size: 17px;">
			<thead>
				<tr>
					<th>Indicador</th>
					<?php 
					$queryAño = $this -> db -> get('años');
					foreach ($queryAño -> result() as $queryAño) { ?>
					
						<th><?= $queryAño -> Años; ?></th>
					
					<?php }
				?>
					<th style="width: 160px;">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$queryIndicador = $this -> db -> get('indicadores');
					foreach ($queryIndicador -> result() as $queryIndicador) {
						$Nom = $queryIndicador -> Nombre;
						$Def =$queryIndicador -> Definición;
						$Int =$queryIndicador -> Interpretación;
						$Inf =$queryIndicador -> Información_requerida;
						$For =$queryIndicador -> Forma_de_Calculo;
					 ?>
					<tr>
						<td><?= $queryIndicador -> Nombre; ?></td>
					<?php 
						$queryAño2 = $this -> db -> get('años');
					foreach ($queryAño2 -> result() as $queryAño2) {
							$año = $queryAño2 -> Años;
					// }
						$queryValor = $this-> db->where('Nombre',$queryIndicador -> Nombre);
						$queryValor = $this-> db->where('Año',$queryAño2 -> Años);
						$queryValor = $this-> db->where('User',$usr);
						$queryValor = $this -> db -> get('IndAño');
						if ($queryValor -> num_rows()>0){
						foreach ($queryValor -> result() as $queryValor) {?>
							<td><?= $queryValor -> Valor; ?></td>
						<?php } 
						} else{ 
					?>
						<td>NA</td>
					<?php }
						}
						// echo $Nom;
						$rest = substr($Nom,0,5);  
						// echo $rest;
					 ?>
						<td>
						<!-- <button  type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button> -->
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?= $rest; ?>"><span class="glyphicon glyphicon-pencil"></span></button>
						<!--  -->
						  <!-- Modal -->
			  <div class="modal fade" id="myModal<?= $rest; ?>" role="dialog">
			   <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fechas del <?= $Nom; ?></h4>
      </div>
      <div class="modal-body">
      <?= form_open("Niv1/InsertValor") ?>
        <center>
        	<table >
        		<?php 
        			$Nomb = array('name'=>'txtNombre','id'=>'txtNombre','class'=>'texto','style'=>'visibility:hidden');
					$Usuario = array('name'=>'txtUsuario','id'=>'txtUsuario','class'=>'texto','style'=>'visibility:hidden');
        			// Activo años
				$queryAñoEdit = $this -> db -> get('años');
				foreach ($queryAñoEdit -> result() as $queryAñoEdit) { 
						// Indicador
						// valor
						$queryResultado =$this-> db ->where('Nombre',$Nom); 
						$queryResultado =$this-> db ->where('Año',$queryAñoEdit -> Años);
						$queryResultado =$this-> db ->where('User',$usr);
						$queryResultado =$this -> db -> get('indaño');
						if ($queryResultado -> num_rows()>0){
							foreach ($queryResultado ->result() as $queryResultado) { ?>	
				        		<tr>
				        		<th style="position: relative;left: auto;right: 25px;bottom: 0px;height: 40px;"> <?= $queryAñoEdit -> Años; ?>	
				        			<?php
		        				if ($queryAñoEdit ->Status ==0) { ?>
		        				<td><input  type="text" name="<?=$queryAñoEdit -> Años;?>" value="<?=$queryResultado -> Valor; ?>"  > </td>
		        		  <?php } 
		        			else{ ?>
		        					<td><input style="cursor: no-drop; background-color: #e7e7e7;" type="text" name="<?=$queryAñoEdit -> Años;?>" readonly="readonly" value="<?=$queryResultado -> Valor; ?>"> </td>
		        	      <?php }
		        	  		}
        				}
        				else { ?>
        					<tr>
				        		<th style="position: relative;left: auto;right: 25px;bottom: 0px;height: 40px;"><?= $queryAñoEdit -> Años; ?>	
				        	<?php
		        				if ($queryAñoEdit ->Status ==0) { ?>
		        				<td><input type="text" name="<?=$queryAñoEdit -> Años;?>" value="NA"> </td>
		        		  <?php } 
		        			else{ ?>
		        					<td><input style="cursor: no-drop; background-color: #e7e7e7;" type="text" name="<?=$queryAñoEdit -> Años;?>" readonly="readonly" value="NA"> </td>
		        	      <?php }
        				}
        			 ?>
        						</tr>
			<?php    
				}
				?>
        	</table>
	        </center>
	        <br>
	        <?= form_input($Nomb,$Nom) ?>
	        <?= form_input($Usuario,$usr) ?>
	        <center>
	          <button type="Submit" class="btn btn-success">Guardar</button>
	        </center>
	      <?= form_close() ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
		<!-- fin del modal -->
		<a href="#" title="<?= $Nom ?>" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="
		 <table border='1' style='width: 600px;'>
			<tr>
				<th style='width: 160px;  background-color: green; '>Nombre del Indicador</th>
				<td><?= $Nom ?></td>
			</tr>
			<tr>
				<th style='background-color: green;' >Definición</th>
				<td><?= $Def ?></td>
			</tr>
			<tr>
				<th style='background-color: green;'>Interpretación</th>
				<td><?= $Int ?></td>
			</tr>
			<tr>
				<th style='background-color: green;'>Información requerida </th>
				<td> <?= $Inf ?> </td>
			</tr>
			<tr>
				<th style=' background-color: green;'>Formula de Calculo</th>
				<td><?= $For ?></td>
			</tr>
		</table>
		" >
		<!--  -->
		
			<!--  -->
			<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-question-sign"></span></button>
		</a>
						</td>
						<a href=""></a>
					<?php }
				?>
					  </tr>
        </tbody>
		</table>
		<?= form_open("DercargaPDF/Descarga") ?>
		 <input type="text" name="user" style="visibility: hidden;" value="<?= $usr ?>">
		<center>
			<button>Dercargar PDF</button>
		</center>	
		<?= form_close() ?>
	</fieldset>
<!-- </center> -->
<!-- </fieldset> -->
          <!-- top tiles -->
          
        <!-- /page content -->

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
