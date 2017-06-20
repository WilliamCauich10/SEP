  <!DOCTYPE html>
<html>
<head>
	<title>Indicadores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar  navbar-default navbar-fixed-top" style="height: 76px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="padding-top: 0px;"><img src="/SEP/img/SEPbanner.png" style="width: 300px;height: 70px;"> </a>
    </div>
    <ul class="nav navbar-nav" style="padding-top: 10px;">
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-pencil"></span>   Consulta  <span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="/SEP/index.php/Niv4/Indicadores">EMS</a></li>
          <li><a href="#">IES</a></li>
        </ul>
    </li>
    <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span>Informacion General</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Avances</a></li>
    <li><a href="/SEP"><span class="glyphicon  glyphicon-log-out"></span> Salir </a></li>
	</ul>
</div>
</nav>
  
<div class="container" style="margin-top:50px">  

</div>
<br>
<br>
<center>
  <table >
    <tr>
      <td style="width: 300px;">
        <label>
          Indicador 1
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Indicador1">Ver</button>
        </label>
      </td>
      <td style="width: 300px;"></td>
    </tr>
    <tr>
      <td>dos</td>
      <td>Reporte</td>
    </tr>
    <tr>
      <td>trres</td>
      <td>historico</td>
    </tr>
    <tr>
      <td>cuatro</td>
      <td></td>
    </tr>
  </table>
</center>
<!-- Indicador 1 -->
<div id="Indicador1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Selecciona el filtrado </h4>
      </div>
      <div class="modal-body">
       <label>
        Todos 
        <?= form_checkbox('Todos','semarnat',true) ?>
      </label>
      <br>
      <label>
        Genero 
        <?= form_checkbox('Genero','semarnat',false) ?>
      </label>
      <label>
        Edad 
        <?= form_checkbox('Edad','semarnat',false) ?>
      </label>
      <br>
      <label style="position: relative;">
        Becario 
        <?= form_checkbox('Becario','semarnat',false) ?>
      </label>
      <label>
        Indigena 
        <?= form_checkbox('Indigena','semarnat',false) ?>
      </label>
      <label>
        NEE 
        <?= form_checkbox('NEE','semarnat',false) ?>
      </label>
      <label>
        Trabajo remunerado 
        <?= form_checkbox('Trabajo','semarnat',false) ?>
      </label>
      <label>
        Modalidad 
        <?= form_checkbox('Modalidad','semarnat',false) ?>
      </label>
      <label>
        Turno 
        <?= form_checkbox('Turno','semarnat',false) ?>
      </label>
      <label>
        Promedio Ciclo anterior
        <?= form_checkbox('Promedio','semarnat',false) ?>
      </label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>