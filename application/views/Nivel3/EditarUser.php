<!DOCTYPE html>
<html>
<head>
  <title>SEP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="/SEP/img/Icono.png">
  <link rel="stylesheet" href="/SEP/css/menu.php" media="screen">
  <style type="text/css">
    .editText{
      padding: 5px;border: 1px solid #ccc; background: #f4f4f4
    }
  </style>
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
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Eveto <span class="caret"></span></a>
      <ul class="dropdown-menu" style="padding-top: 0px;padding-bottom: 0px; ">
          <li><a href="/SEP/index.php/">Agregar</a></li>
          <li><a href="/SEP/index.php/">Editar</a></li>
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
<center>
<table style="width: 702px;height: 202px;" class="table table-striped">
  <thead>
    <tr>
      <th>nombre</th>
      <th>usur</th>
      <th>pw</th>
      <th>rol</th>
    </tr>
  </thead>
  <?php 
  if ($prueba) {
    foreach ($prueba-> result() as $prueba) {?>
    <tbody>
      <tr>
        <td><?= $prueba->Nombre; ?></td>
        <td><?= $prueba->Usuario;?> </td>
        <td><?= $prueba->PW; ?></td>
        <td><?= $prueba->Rol; ?></td>
      </tr>
    </tbody>
  <?php }
  }else{
    echo "<p>No cuentas con Avances Programaticos</p>";
    }
  ?>
</table>
ombre <span class="editText"> raasdas</span>
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
<script type="text/javascript">
  $(function(){
      $('.editText').doubleclick(function(){
        var text = $(this).text();
        $(this).empty().html(<input type"text" value="'+text+'">).find('input').focus();
      }).keypress(function(e){
        if (e.keycode==2){
          var text = $('input',this).val();
          $(this).html(text);
        }
      });
    });
</script>
</html>