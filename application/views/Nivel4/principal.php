<!DOCTYPE html>
<html>
<head>
	<title>SEP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="/SEP/img/Icono.png">
  <link rel="stylesheet" href="/SEP/css/menu.php" media="screen">
</head>
<body>
<nav class="navbar  navbar-default navbar-fixed-top" >
<div class="backstretch" style="left: 0px;top: 0px;overflow: hidden;margin: 0px;padding: 0px;height: 200px;width: 107%;z-index: -999999;position: fixed;bottom: 0px;right: 0px;">
  <img src="/SEP/img/BanerFinal.png" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -9; left: -90px; top: 0px;">
  <img src="/SEP/img/SEPbanner.png" style="position: absolute;top: -10;bottom: 0px;width: 500px;height: 200px;right: 0px;left: 35%">
</div>
  <div class="container-fluid">
    <ul class="nav navbar-nav" >
    <li><a href="/SEP/index.php/Niv4/Inicio"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span>   Consulta  <span class="caret"></span></a>
      <ul class="dropdown-menu" style="padding-top: 0px;padding-bottom: 0px; ">
          <li><a href="/SEP/index.php/Niv4/Indicadores">EMS</a></li>
          <li><a href="/SEP/index.php/Niv4/IES">IES</a></li>
        </ul>
    </li>
    <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Informacion General</a></li>
    <li><a href="/SEP"><span class="glyphicon  glyphicon-log-out"></span> Salir </a></li>
	</ul>
</div>
</nav>
  
<div class="container" style="margin-top:50px;height: 230px;">  

</div>
<!-- <?= $usr ?>
<?= $pw ?>
<?= $Nivel ?>
 -->
<!-- <a href="/SEP/index2.php"> asdasd</a> 

<form action="importar" enctype="multipart/form-data" method="post">
   <input id="archivo" accept=".csv" name="archivo" type="file" /> 
   <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> 
   <input name="enviar" type="submit" value="Importar" />
</form> -->
<div style="position: relative; width: 100px;">
<?php 
include_once('index2.php');
?>
</div>
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