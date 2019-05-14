<?php
	require_once("soporte.php");
	require_once("clases/validadorLogin.php");

	if ($auth->estaLogueado()) {
		header("Location:form.php");exit;
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
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Alta Usuario Nuevo</title>



</head>
<body  id="page-top" style="background-color:rgba(156, 39, 176, 0.6)">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro' >

<div >

	<form method="POST" class=" form-group col-xs-12 row center">
		<?php include("errores.php"); ?>
		<div class=" form-group col-xs-12 row center">
			<label for="email" class="col-xs-4 col-md-4 col-form-label">Email</label>
			<input type="text"  class="col-xs-8 col-md-6" name="email" placeholder="luis@email.com" id="email"/>
		</div>
		<!-- <div class=" form-group row col-md-offset-3">
			<label for="password" class="col-sm-2 col-form-label">Contrase&ntilde;a</label>
			<input type="password" class="col-xs-2 col-md-4" name="password" id="password"/>
		</div> -->
		<div>
			Recordame
			<input name="recordame" type="checkbox" value="true">
		</div>
		<div>
			<input type="submit" value="Enviar" class="btn btn-default navbar-btn" style="text-decoration:none" >
		</div>

	</form>
	</div>
	</div>

	      <footer>
	                  <p>Copyright &copy; BFR 2016</p>
	      </footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
