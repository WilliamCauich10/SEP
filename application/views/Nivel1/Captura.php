<!DOCTYPE html>
<html>
<head>
	<title>Indicadores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="/SEP/css/margen_indicadoresN1.php">
</head>
<body>
<nav class="navbar  navbar-default navbar-fixed-top" style="height: 76px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="padding-top: 0px;"><img src="/SEP/img/SEPbanner.png" style="width: 300px;height: 70px;"> </a>
    </div>
    <ul class="nav navbar-nav" style="padding-top: 10px;">
     <li><a href="##"><span class="glyphicon glyphicon-pencil"></span>Consulta</a></li>
    <li><a href="/SEP/index.php/Niv1/Captura"><span class="glyphicon glyphicon-plus-sign"></span>Captura</a></li>
    <li><a href="/SEP"><span class="glyphicon  glyphicon-log-out"></span> Salir </a></li>
  </ul>
</div>
</nav>
  
<div class="container" style="margin-top:50px">  

</div>
<br>
<br>
  <table align="center">
      <tr>
        <label>

          
      <th>
      <div class="container">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Indicador 1</button>
          <div id="demo" class="collapse">
              
          </div>
            </div>
      </th>
      <th>
      <div class="container">
      <a href="#"  data-toggle="popover" title="Indicador 1" data-content="Contiene informacion del indicador para saber que se requiere" class="navbar-brand" data-placement="bottom"> 
       <span class="glyphicon glyphicon-question-sign"></span> 
       </a>
       </th>
          </div>
        </label>
      </tr>
       <tr>
        <label>

          
      <th>
      <div class="container">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Indicador 2</button>
          <div id="demo" class="collapse">
              
          </div>
            </div>
      </th>
      <th>
      <div class="container">
      <a href="#"  data-toggle="popover" title="Indicador 2" data-content="Contiene informacion del indicador para saber que se requiere" class="navbar-brand" data-placement="bottom"> 
       <span class="glyphicon glyphicon-question-sign"></span> 
       </a>
       </th>
          </div>
        </label>
      </tr>
        <tr>
        <label>

          
      <th>
          <div class="container">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Indicador 3</button>
          <div id="demo" class="collapse">
             
          </div>
            </div>
      </th>
      <th>
      <div class="container">
      <a href="#"  data-toggle="popover" title="Indicador 3" data-content="Contiene informacion del indicador para saber que se requiere" class="navbar-brand" data-placement="bottom"> 
       <span class="glyphicon glyphicon-question-sign"></span> 
       </a>
       </th>
          </div>
        </label>
      </tr>

      <tr>
        <label>

          
      <th>
      <div class="container">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Indicador 4</button>
          <div id="demo" class="collapse">
          asjdkaj
             <input type="text" name="nombredelacaja"> 
          </div>
            </div>
      </th>
      <th>
      <div class="container">
      <a href="#"  data-toggle="popover" title="Indicador 4" data-content="Contiene informacion del indicador para saber que se requiere" class="navbar-brand" data-placement="bottom"> 
       <span class="glyphicon glyphicon-question-sign"></span> 
       </a>
       </th>
          </div>
        </label>
      </tr> 
  </table>
<!-- Indicador 1 -->
<div id="Indicador1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

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
       <a href="" data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
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
       <a href="" data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
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
       <a href="" data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
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
       <a href="" data-toggle="popover" title="Información" data-content="Para poder subir el archivo correctamente la extensión debe de ser .CSV" ><span class="glyphicon glyphicon-question-sign"></span> </a>
   </form>
  </div>
  </div>
<!--  -->
</body>
    
    <script>
      $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
      });
    </script>


</html>