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
  </ul></div>
</nav>
  
<div class="container" style="margin-top:50px;height: 230px;"> 

</div>
<br>
<br>
<table align="center">
 <tr>
    <td>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Indicador 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
      </td>
      <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Indicador 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
      </td>
        <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Indicador 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
        </td>
        <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Indicador 4</a>
        </h4>
      </div>

      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
          </td>
      </tr>

      <tr>
        <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Indicador 5</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
      </td>
      <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Indicador 6</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
        </td>
        <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Indicador 7</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
        </td>
        <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Indicador 8</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
          </td>
      </tr>
      <tr>
        <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Indicador 9</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
      </td>
      <td>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Indicador 10</a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">Caja de texto<input type="text" name="nombredelacaja"></div>
      </div>
    </div>
    </td>
      </tr>
  </div> 
</div>  
</table>
 
<!-- Pie de pagina -->
<footer>
  <div class="PiePag" >
    <p>Av. Armada de México N° 176</p>
    <p>Esq. Presa de la Amistad Col. Campestre C.P. 77040  Chetumal, Q. Roo.</p>
    <p>Teléfono:(01 983) 832 79 25 Fax: 832 32 91</p>
    <p> <a href="delegacion.qroo@nube.sep.gob.mx">delegacion.qroo@nube.sep.gob.mx</a></p>
  </div>
</footer>
<!--  -->
</body>
    
    <script>
      $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
      });
    </script>


</html>