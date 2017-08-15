<!DOCTYPE html>
<html>
<head>
	<title>SEP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/SEP/css/menu.php" media="screen">
  <link rel="shortcut icon" href="/SEP/img/Icono.png">
  <style type="text/css">
    .Plantillas{
      color: white;
    }
  </style>
  <style type="text/css">
  	fieldset.scheduler-border {
  	width: 1100px;
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;

}
  </style>
</head>
<body>

<nav class="navbar  navbar-default navbar-fixed-top" >
<div class="backstretch" style="left: 0px;top: 0px;overflow: hidden;margin: 0px;padding: 0px;height: 200px;width: 107%;z-index: -999999;position: fixed;bottom: 0px;right: 0px;">
  <img src="/SEP/img/BanerFinal.png" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -9; left: -90px; top: 0px;">
  <img src="/SEP/img/SEPbanner.png" style="position: absolute;top: -10;bottom: 0px;width: 500px;height: 200px;right: 0px;left: 35%">
</div>
    <ul class="nav navbar-nav">
    <li><a href="/SEP/index.php/Niv1/Inicio/<?= $usr ?>"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
		<li><a href="/SEP/index.php/Niv1/ConsultaNi1/<?= $usr ?>"><span class="glyphicon glyphicon-search"></span> Consulta</a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-pencil"></span>   Captura <span class="caret"></span></a>
      <ul class="dropdown-menu"  style="padding-top: 0px;padding-bottom: 0px;">
          <li><a href="/SEP/index.php/Niv1/Captura/<?= $usr ?>">Indicadores</a></li>
          <li><a href="/SEP/index.php/Niv1/Captura2/<?= $usr ?>">Indicadores Academicos</a></li>
        </ul>
    </li>
    <li><a href="/SEP"><span class="glyphicon  glyphicon-log-out"></span> Salir </a></li>
	</ul>
</div>
</nav>
  
<div class="container" style="margin-top:50px;height: 230px;">   

</div>
<center>	
	<fieldset class="scheduler-border">
	<label>Mostrar </label>
	<select name="Tipo">
		<option value="todos">All</option>
		<?php 
		$n2="";
			$queryNombreIndicador = $this -> db -> get('indicadores');
			foreach ($queryNombreIndicador -> result() as $queryNombreIndicador) { ?>
				<option value="<?= $queryNombreIndicador -> Nombre; ?>"><?= $queryNombreIndicador -> Nombre; ?></option>
			
			<?php } ?>
	
	</select>
	<label>Buscar
		<input type="text" name="">
	</label>
	<button>Buscar</button>
	
		<table class="table table-condensed" style="width: 1000px;">
			<thead>
				<tr>
					<th>Indicador</th>
					<?php 
					$queryAño = $this -> db -> get('años');
					foreach ($queryAño -> result() as $queryAño) { ?>
					
						<th><?= $queryAño -> Años; ?></th>
					
					<?php }
				?>
					<th style="width: 160px;">Apciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$queryIndicador = $this -> db -> get('indicadores');
					foreach ($queryIndicador -> result() as $queryIndicador) {
						$Nom = $queryIndicador -> Nombre;
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
						$rest = substr($Nom, -1);  
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
        	<table>
        		<?php 
        			$Nomb = array('name'=>'txtNombre','id'=>'txtNombre','class'=>'texto','style'=>'visibility:hidden');
					$Usuario = array('name'=>'txtUsuario','id'=>'txtUsuario','class'=>'texto','style'=>'visibility:hidden');
        			// Activo años
				$queryAñoEdit = $this -> db -> get('años');
				foreach ($queryAñoEdit -> result() as $queryAñoEdit) { 
						// Indicador
						// valor
						$queryResultado =$this-> db ->where('Nombre',"Indicador ".$rest); 
						$queryResultado =$this-> db ->where('Año',$queryAñoEdit -> Años);
						$queryResultado =$this-> db ->where('User',$usr);
						$queryResultado =$this -> db -> get('indaño');
						if ($queryResultado -> num_rows()>0){
							foreach ($queryResultado ->result() as $queryResultado) { ?>	
				        		<tr>
				        		<th style="position: relative;left: auto;right: 25px;bottom: 0px;height: 40px;"><?= $queryAñoEdit -> Años; ?>	
				        			<?php
		        				if ($queryAñoEdit ->Status ==0) { ?>
		        				<td><input  type="text" name="<?=$queryAñoEdit -> Años;?>" value="<?=$queryResultado -> Valor; ?>"  > </td>
		        		  <?php } 
		        			else{ ?>
		        					<td><input style="cursor: no-drop;" type="text" name="<?=$queryAñoEdit -> Años;?>" readonly="readonly" value="<?=$queryResultado -> Valor; ?>"> </td>
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
		        					<td><input style="cursor: no-drop;" type="text" name="<?=$queryAñoEdit -> Años;?>" readonly="readonly" value="NA"> </td>
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
						<!-- <button onclick="Prueba('<?= $Nom ?>')" type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button> -->
						<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
						<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-search"></button>
						</td>
						<a href=""></a>
					</tr>
					<?php }
				?>
			</tbody>
		</table>	
	</fieldset>
</center>
<!-- tabla de editar -->
<center>
  <table>
    <tr>
      <th colspan="2"><h1>Plantillas de captura de datos</h1></th>  
    </tr>
    <tr>
      <td><h3>Esculas</h3></td>
      <td><button type="button" class="btn btn-success"><a class="Plantillas" href="/SEP/Plantillas/Esculas.csv" download="PlantillaEsculas">Descargar</a></button></td>
    </tr>
    <tr>
      <td><h3>Docentes</h3></td>
      <td><button type="button" class="btn btn-success"><a class="Plantillas" href="/SEP/Plantillas/Docentes.csv" download="PlantillaDocentes">Descargar</a></button></td>
    </tr>
    <tr>
      <td><h3>Alumnos</h3></td>
      <td><button type="button" class="btn btn-danger"><a class="Plantillas" href="/SEP/Plantillas/.csv" download="PlantillaAlumnos">Descargar</a></button></td>
    </tr>
  </table>
</center>
<!-- <a href="/SEP/Plantillas/Docentes.csv" download="Reporte2Mayo2010">
Descargar Archivo
</a> -->

<!-- Pie de pagina -->
<footer>
  <div class="PiePag" >
    <p>Av. Armada de México N° 176</p>
    <p>Esq. Presa de la Amistad Col. Campestre C.P. 77040  Chetumal, Q. Roo.</p>
    <p>Teléfono:(01 983) 832 79 25 Fax: 832 32 91</p>
    <p> <a href="delegacion.qroo@nube.sep.gob.mx">delegacion.qroo@nube.sep.gob.mx</a></p>
  </div>
</footer>
</body>
 
<script type="text/javascript">
	function Prueba(p2) {
		// document.write(p2);
		// alert(p2);
		var c= p2;
		document.getElementById("txtTabla").value = "Tutorial Javascript";
		document.form."txtTabla".value="hola";
		// $n2 = c;
     
	}
</script>

<script>
	$(document).ready(function(){
	var pestaña_defecto = "valor";
$("contenedor").load("p.php",{variaJava:pestaña_defecto});
});
// }
</script>
</html>