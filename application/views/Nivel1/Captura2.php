<!DOCTYPE html>
<html>
<head>
	<title>Indicadores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="/SEP/css/margen_indicadoresN1.php">
    <link rel="stylesheet" href="/SEP/css/menu.php" media="screen">
    <link rel="shortcut icon" href="/SEP/img/Icono.png">
</head>
<body>
<nav class="navbar  navbar-default navbar-fixed-top" >
<!-- <div class="backstretch" style="left: 0px;top: 0px;overflow: hidden;margin: 0px;padding: 0px;height: 200px;width: 107%;z-index: -999999;position: fixed;bottom: 0px;right: 0px;">
  <img src="/SEP/img/BanerFinal.png" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -9; left: -90px; top: 0px;">
  <img src="/SEP/img/SEPbanner.png" style="position: absolute;top: -10;bottom: 0px;width: 500px;height: 200px;right: 0px;left: 35%">
</div> -->
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
  
<div class="container" style="margin-top:50px;height: 30px;">  

</div>
<br>
<br>
  </div>
</div>
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
<!--  -->
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
    
    <script>
      $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
      });
    </script>


</html>