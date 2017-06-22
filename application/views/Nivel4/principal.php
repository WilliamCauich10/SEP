<!DOCTYPE html>
<html>
<head>
	<title>SEP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- <img src="/SEP/img/BanerFinal.png" style="width: 100%;height: 200px;">
<img src="/SEP/img/SEPbanner.png" > -->
<nav class="navbar  navbar-default navbar-fixed-top" style="height: 76px;top: 200px;">
<div class="backstretch" style="left: 0px;top: 0px;overflow: hidden;margin: 0px;padding: 0px;height: 200px;width: 107%;z-index: -999999;position: fixed;bottom: 0px;right: 0px;">
  <img src="/SEP/img/BanerFinal.png" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -9; left: -90px; top: 0px;">
  <img src="/SEP/img/SEPbanner.png" style="position: absolute;top: -10;bottom: 0px;width: 500px;height: 200px;right: 0px;left: 35%">
</div>
  <div class="container-fluid">
    <ul class="nav navbar-nav" style="padding-top: 10px;">
    <li><a href="/SEP/index.php/Niv4/Inicio">Inicio</a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-pencil"></span>   Consulta  <span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="/SEP/index.php/Niv4/Indicadores">EMS</a></li>
          <li><a href="#">IES</a></li>
        </ul>
    </li>
    <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span>Informacion General</a></li>
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

<form action="importar" enctype="multipart/form-data" method="post">
   <input id="archivo" accept=".csv" name="archivo" type="file" /> 
   <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> 
   <input name="enviar" type="submit" value="Importar" />
</form>
</body>
</html>