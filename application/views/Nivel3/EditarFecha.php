<!DOCTYPE html>
<html>
<head>
	<title>Editar Fecha</title>
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
    <li><a href="/SEP/index.php/Niv3/Inicio"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Fechas <span class="caret"></span></a>
      <ul class="dropdown-menu" style="padding-top: 0px;padding-bottom: 0px; ">
          <li><a href="/SEP/index.php/Niv3/crearFecha">Agregar</a></li>
          <li><a href="/SEP/index.php/Niv3/editarFecha">Editar</a></li>
        </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Indicador <span class="caret"></span></a>
      <ul class="dropdown-menu" style="padding-top: 0px;padding-bottom: 0px; ">
          <li><a href="/SEP/index.php/Niv3/crearInd">Agregar</a></li>
          <li><a href="/SEP/index.php/Niv3/editarInd">Editar</a></li>
        </ul>
    </li>
    <li><a href="/SEP/index.php/Niv3/Editar"><span class="glyphicon glyphicon-edit"></span> Editar</a></li>
    <li><a href="/SEP/index.php/Niv3/Crear"><span class="glyphicon glyphicon-plus-sign"></span> Crear</a></li>
    <li><a href="/SEP"><span class="glyphicon  glyphicon-log-out"></span> Salir </a></li>
  </ul>
</div>
</nav>
  
<div class="container" style="margin-top:50px;height: 230px;">  

</div>

<!--  -->
<center>
  <table style="width: 702px;height: 202px;" class="table table-striped">
    <thead>
      <tr>
        <th>Año</th>
        <th>Estatus</th>
        <th style="width: 160px;">Accion</th>
      </tr>
    </thead>
        <tbody>
    <?php 
        $ValAño = array('name'=>'txtValAño','id'=>'txtValAño','class'=>'texto','style'=>'visibility:hidden');
        $ValorAño="";
        $queryAños = $this -> db -> get('años');
      foreach ($queryAños -> result() as $queryAños) { ?>
          <tr>
            <td><?= $queryAños -> Años; ?></td>
            <?php 
                  if ($queryAños -> Status ==1) {
                    $ValorAño="Desactivado";
                  }else{
                    $ValorAño="Activado";
                  }
             ?>
            <td><?= $ValorAño ?></td>
            <td>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?= $queryAños->Años; ?>"> Editar</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <!-- Modal -->
        <div class="modal fade" id="myModal<?= $queryAños->Años; ?>" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Fecha <?= $queryAños -> Años; ?> </h4>
              </div>
              <div class="modal-body">
              <?php
                $queryResult = $this-> db->where('Años',$queryAños -> Años);
                $queryResult = $this-> db->get('años');
                foreach ($queryResult-> result() as $queryResult) {
              }?>
           <?= form_open("/Niv3/actualizaFechas") ?>

           <center>
                <label>Año 
                   <br>
                   <input type="text" name="txtAños" value="<?= $queryResult -> Años; ?>">
                </label>
              <br>
                <label>Estatus
                   <br>
                  <?php 
                      if ($queryResult -> Status==0) {?>
                          <label class="radio-inline">
                            <input type="radio" name="radioStatus" value="0" checked>Activar
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="radioStatus" value="1" >Desactivar
                          </label>
            <?php   }else{ ?>
                          <label class="radio-inline">
                            <input type="radio" name="radioStatus" value="0" >Activar
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="radioStatus" value="1" checked>Desactivar
                          </label>

                <?php    } ?>
                </label>
            </center>
            <center>
              <?= form_input($ValAño,$queryAños -> Años) ?>
              <button  type="submit"  class="btn btn-success">Guardar</button>
            </center>
                <?= form_close() ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
      <?php  
      }
     ?>
          </tr>
        </tbody>
  </table>
</center>

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