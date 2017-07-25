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
</head>
<body>
<nav class="navbar  navbar-default navbar-fixed-top" >
<div class="backstretch" style="left: 0px;top: 0px;overflow: hidden;margin: 0px;padding: 0px;height: 200px;width: 107%;z-index: -999999;position: fixed;bottom: 0px;right: 0px;">
  <img src="/SEP/img/BanerFinal.png" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -9; left: -90px; top: 0px;">
  <img src="/SEP/img/SEPbanner.png" style="position: absolute;top: -10;bottom: 0px;width: 500px;height: 200px;right: 0px;left: 35%">
</div>
    <ul class="nav navbar-nav">
    <li><a href="/SEP/index.php/Niv1/Inicio"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
		<li><a href="/SEP/index.php/Niv1/ConsultaNi1"><span class="glyphicon glyphicon-search"></span> Consulta</a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-pencil"></span>   Captura <span class="caret"></span></a>
      <ul class="dropdown-menu"  style="padding-top: 0px;padding-bottom: 0px;">
          <li><a href="/SEP/index.php/Niv1/Captura">Indicadores</a></li>
          <li><a href="/SEP/index.php/Niv1/Captura2">Indicadores Academicos</a></li>
        </ul>
    </li>
    <li><a href="/SEP"><span class="glyphicon  glyphicon-log-out"></span> Salir </a></li>
	</ul>
</div>
</nav>
  
<div class="container" style="margin-top:50px;height: 230px;">   

</div>
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
</html>