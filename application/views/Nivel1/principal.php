<!DOCTYPE html>
<html>
<head>
	<title>SEP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar  navbar-default navbar-fixed-top" style="height: 76px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="padding-top: 0px;"><img src="/SEP/img/SEPbanner.png" style="width: 300px;height: 70px;"> </a>
      <a class="navbar-brand"><?= $usr ?> </a>
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
<h1>hola <?= $usr ?></h1>
<h1>contraseña  <?= $pw ?></h1>
<h1>Nivel <?= $Nivel ?></h1>
</body>
</html>