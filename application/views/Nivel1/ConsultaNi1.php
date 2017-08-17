<!DOCTYPE html>
<html>
<head>
	<title>Indicadores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/SEP/css/indicadores.php" media="screen">
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
      <?= form_open("Niv1/Filtros1") ?>
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
      <?= form_open("Niv1/Filtros2") ?>
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
      <?= form_open("Niv1/Filtros3") ?>
        <br>
         <label>
          Todos 
          <?= form_checkbox('Todos3','Todos3',true) ?>
        </label>
        <br>
        <center>
          <table>
            <tr>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Escuela3','Escuela3',false) ?>
                  Escuela 
                </label>
              </td>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Turno3','Turno3',false) ?>
                  Turno 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                  <label>
                    <?= form_checkbox('Edad3','Edad3',false) ?>
                    Edad
                  </label>      
              </td>
              <td>
                <label>
                  <?= form_checkbox('Nivel3','Nivel3',false) ?>
                  Nivel de estudios
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Años3','Años3',false) ?>
                  Años como directivo
                </label>  
              </td>
              <td>
                <label>
                  <?= form_checkbox('Empleo3','Empleo3',false) ?>
                  Otro Empleo
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
<!-- Fin indicador 3 -->
<!-- Indicador 4  -->
<div id="Indicador4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Selecciona el filtrado </h4>
      </div>
      <div class="modal-body">
      <?= form_open("Niv1/Filtros4") ?>
        
        <br>
         <label>
          Todos 
          <?= form_checkbox('Todos4','Todos4',true) ?>
        </label>
        <br>
        <center>
          <table>
            <tr>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Localidad','Localidad',false) ?>
                  Localidad (tamaño)
                </label>
              </td>
              <td style="width: 250px;">
                <label>
                  <?= form_checkbox('Municipio','Municipio',false) ?>
                  Municipio 
                </label>
              </td>
            </tr>
            <tr>
              <td>
                  <label>
                    <?= form_checkbox('Aulas','Aulas',false) ?>
                    Cantidad de Aulas
                  </label>      
              </td>
              <td>
                <label>
                  <?= form_checkbox('Pupitres','Pupitres',false) ?>
                  Cantidad de pupitres
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <label>
                  <?= form_checkbox('Planea','Planea',false) ?>
                  Planea
                </label>  
              </td>
              <td>
                <label>
                  <?= form_checkbox('Ceneval','Ceneval',false) ?>
                  Ceneval
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
<!-- Fin indicador 4 -->
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