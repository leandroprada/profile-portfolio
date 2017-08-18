<?php
	require("soporte.php");

	$repoUsuarios = $repo->getRepositorioUsuarios();

	$usuarioLogueado = $auth->traerUsuarioLogueado($repoUsuarios);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/welcome.css">

  <title>LAP</title>
</head>
<body>


  <body  id="page-top">
      <?php    require_once ("navbar.php") ?>
    <div class="wrapp">



        <div class="row cuerpofila">
          <div class=" col-xs-4  col-xs-offset-4 btn btn-outline-success">
            <h3>Bienvenido/a a LAP</h3>



						</div>
						</div>
					<div class="center">
						<img src="images/index.png" alt="" height="200px" color="white"/>
					</div>
						<div class="center">

							<?php if ($auth->estaLogueado()) { ?>
								 <?php
								$usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);

							echo "Hola ".($usuario->getNombre()). " ¡Bienvenido!";
							}
							else {?><h3>Por favor logueate</h3><?php }?>

</div>

            </div>
        <footer>
                    <p>Copyright &copy; LAP 2016</p>
        </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  </html>
