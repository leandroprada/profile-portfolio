<?php
	require_once("soporte.php");
	require_once("clases/validadorLogin.php");

	if ($auth->estaLogueado()) {
		header("Location:index.php");exit;
	}
	$errores = [];
	if ($_POST) {

		$validador = new ValidadorLogin();

		$errores = $validador->validar($_POST, $repo);

		if (empty($errores))
		{
			$usuario = $repo->getRepositorioUsuarios()->traerUsuarioPorEmail($_POST["email"]);
			$auth->loguear($usuario);
			if ($validador->estaEnFormulario("recordame"))
			{
				$auth->guardarCookie($usuario);
			}
			header("Location:index.php");exit;
		}
	}
?>
<!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta name="viewport"
content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Ingreso Usuarios - Tandm</title>



</head>
<body  id="page-top">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro' >

<div >

	<form method="POST">
		<?php include("errores.php"); ?>
		<div class=" form-group row col-md-offset-3">
			<label for="email" class="col-xs-2 col-form-label">Email</label>
			<input type="text" class="col-xs-2 col-md-4" name="email" id="email"/>
		</div>
		<div class=" form-group row col-md-offset-3">
			<label for="password" class="col-sm-2 col-form-label">Contrase&ntilde;a</label>
			<input type="password" class="col-xs-2 col-md-4" name="password" id="password"/>
		</div>
		<div>
			Recordame
			<input name="recordame" type="checkbox" value="true">
		</div>
		<div>
			<input type="submit" value="Enviar" class="btn btn-default navbar-btn">
		</div>

	</form>
	</div>
	</div>

	      <footer>
	                  <p>Copyright &copy; Tandm 2016</p>
	      </footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/paises.js"></script>
	<script src="js/form_verify.js"></script>
</body>
</html>
