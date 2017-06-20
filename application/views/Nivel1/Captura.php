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
</body>
    
    <script>
      $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
      });
    </script>


</html>