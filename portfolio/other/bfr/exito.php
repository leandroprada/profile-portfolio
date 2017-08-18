<?php
	require("soporte.php");

	$repoUsuarios = $repo->getRepositorioUsuarios();

	$usuarioLogueado = $auth->traerUsuarioLogueado($repoUsuarios);


?>
<!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta name="viewport"
content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Usuario registrado con éxito</title>


</head>
<body  id="page-top" style="background-color:rgba(156, 39, 176, 0.6)">

<?php    require_once ("navbar.php") ?>


<div class='container-fluid registro' >

<div class="row">



<div id="exito" class="col-xs-4 col-xs-offset-4 alert alert-success" >

	Se ha registrado con exito. Ya puede comenzar a cargar o visualizar las tomas de su bebé.

</div>

</div>

<button type="button" class="btn" style="background-color:rgba(156, 39, 176, 1)"><a href="form.php" style="text-decoration:none">Cargar Amamantamiento</a></button>



      </div>

      <footer>
                  <p>Copyright &copy; BFR 2016</p>
      </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
