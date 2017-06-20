<!DOCTYPE html>
<html>
<head>
	<title>Indicadores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/SEP/css/indicadores.php" media="screen">
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
          <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#Indicador1">Ver</button>
        </label>
      </td>
      <td style="width: 300px;"></td>
    </tr>
    <tr>
      <td>
        <label>
          Indicador 2
          <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#Indicador2">Ver</button>
        </label>
      </td>
      <td>Reporte</td>
    </tr>
    <tr>
      <td>
        <label>
          Indicador 3
          <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#Indicador3">Ver</button>
        </label>
      </td>
      <td>historico</td>
    </tr>
    <tr>
      <td>
        <label>
          Indicador 4
          <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#Indicador4">Ver</button>
        </label>
      </td>
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
        <h4 class="modal-title">Selecciona el filtrado Indicador 1</h4>
      </div>
      <div class="modal-body">
      <?= form_open("Niv4/Filtros1") ?>
        <label>Selecionar escuela </label>
        <select name="city" class="materias">
              <option value="none" selected="selected">Escuelas</option>
                <option value="Bachilleres"> Bachilleres 1</option>
            </select>
        <br>
         <label>
          Todos 
          <?= form_checkbox('Todos','Todos',true) ?>
        </label>
        <br>
        <center>
          <table>
            <tr>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Genero','Genero',false) ?>
                  Genero 
                </label>
              </td>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Grado','Grado',false) ?>
                  Grado 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                  <label>
                    <?= form_checkbox('Edad','Edad',false) ?>
                    Edad 
                  </label>      
              </td>
              <td>
                <label>
                  <?= form_checkbox('Becario','Becario',false) ?>
                  Becario 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Indigena','Indigena',false) ?>
                  Indigena 
                </label>  
              </td>
              <td>
                <label>
                  <?= form_checkbox('NEE','NEE',false) ?>
                  NEE 
                </label>      
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Trabajo','Trabajo',false) ?>
                  Trabajo remunerado 
                </label>
              </td>
              <td>
                <label>
                  <?= form_checkbox('Modalidad','Modalidad',false) ?>
                  Modalidad 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Turno','Turno',false) ?>
                  Turno 
                </label>
              </td>
              <td>
                <label>
                  <?= form_checkbox('Promedio','Promedio',false) ?>
                  Promedio Ciclo anterior
                </label>
              </td>
            </tr>
          </table>
        </center>
        <center>
          <button type="Submit" class="btn btn-success">Imprimir</button>
        </center>
      <?= form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- fin Indicador 1 -->
<!-- Indicador 2  -->
<div id="Indicador2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Selecciona el filtrado </h4>
      </div>
      <div class="modal-body">
      <?= form_open("Niv4/Filtros2") ?>
        <label>Selecionar escuela </label>
        <select name="city" class="materias">
              <option value="none" selected="selected">Escuelas</option>
                <option value="Bachilleres"> Bachilleres 1</option>
            </select>
        <br>
         <label>
          Todos 
          <?= form_checkbox('Todos2','Todos2',true) ?>
        </label>
        <br>
        <center>
          <table>
            <tr>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Escuela','Escuela',false) ?>
                  Escuela 
                </label>
              </td>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Turno','Turno',false) ?>
                  Turno 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                  <label>
                    <?= form_checkbox('Edad2','Edad2',false) ?>
                    Edad
                  </label>      
              </td>
              <td>
                <label>
                  <?= form_checkbox('Nivel','Nivel',false) ?>
                  Nivel de estudios
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Años','Años',false) ?>
                  Años como docente 
                </label>  
              </td>
              <td>
                <label>
                  <?= form_checkbox('Asignatura','Asignatura',false) ?>
                  Asignatura 1 y 2
                </label>      
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Empleo','Empleo',false) ?>
                  Otro Empleo
                </label>
              </td>
              <td>
              </td>
            </tr>
          </table>
        </center>
        <center>
          <button type="button" class="btn btn-success">Imprimir</button>
        </center>
      <?= form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Fin  indicador 2 -->
<!-- Indicador 3  -->
<div id="Indicador3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Selecciona el filtrado </h4>
      </div>
      <div class="modal-body">
      <?= form_open() ?>
        <label>Selecionar escuela </label>
        <select name="city" class="materias">
              <option value="none" selected="selected">Escuelas</option>
                <option value="Bachilleres"> Bachilleres 1</option>
            </select>
        <br>
         <label>
          Todos 
          <?= form_checkbox('Todos3','semarnat',true) ?>
        </label>
        <br>
        <center>
          <table>
            <tr>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Escuela3','semarnat',false) ?>
                  Escuela 
                </label>
              </td>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Turno3','semarnat',false) ?>
                  Turno 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                  <label>
                    <?= form_checkbox('Edadind3','semarnat',false) ?>
                    Edad
                  </label>      
              </td>
              <td>
                <label>
                  <?= form_checkbox('Nivel3','semarnat',false) ?>
                  Nivel de estudios
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Años3','semarnat',false) ?>
                  Años como directivo
                </label>  
              </td>
              <td>
                <label>
                  <?= form_checkbox('Empleo3','semarnat',false) ?>
                  Otro Empleo
                </label>
              </td>
            </tr>
          </table>
        </center>
        <center>
          <button type="button" class="btn btn-success">Imprimir</button>
        </center>
      <?= form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Fin indicador 3 -->
<!-- Indicador 4  -->
<div id="Indicador3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Selecciona el filtrado </h4>
      </div>
      <div class="modal-body">
      <?= form_open() ?>
        <label>Selecionar escuela </label>
        <select name="city" class="materias">
              <option value="none" selected="selected">Escuelas</option>
                <option value="Bachilleres"> Bachilleres 1</option>
            </select>
        <br>
         <label>
          Todos 
          <?= form_checkbox('Todos3','semarnat',true) ?>
        </label>
        <br>
        <center>
          <table>
            <tr>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Escuela3','semarnat',false) ?>
                  Escuela 
                </label>
              </td>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Turno3','semarnat',false) ?>
                  Turno 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                  <label>
                    <?= form_checkbox('Edadind3','semarnat',false) ?>
                    Edad
                  </label>      
              </td>
              <td>
                <label>
                  <?= form_checkbox('Nivel3','semarnat',false) ?>
                  Nivel de estudios
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Años3','semarnat',false) ?>
                  Años como directivo
                </label>  
              </td>
              <td>
                <label>
                  <?= form_checkbox('Empleo3','semarnat',false) ?>
                  Otro Empleo
                </label>
              </td>
            </tr>
          </table>
        </center>
        <center>
          <button type="button" class="btn btn-success">Imprimir</button>
        </center>
      <?= form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Fin indicador 4 -->
</body>
</html>