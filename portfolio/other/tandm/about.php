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
  <link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/about.css">

  <title>Nosotros - Tandm</title>
</head>
<body>
	<body  id="page-top">
		<?php    require_once ("navbar.php") ?>



  <div class='wrapp'>
      <!-- Empieza el template-->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Una nueva forma de aprender idiomas</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>Sobre Tandm</h2>
                <p>Tandm es una nueva red social para que puedas comunicarte con otras personas y aprender sobre sus idiomas y costumbres.</p>
                <p>Usando nuestros sistemas de chat o concretando citas lograras un aprendizaje mas dinámico, rápido y eficáz que con cualquier otra herramienta disponible.</p>
            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>Tandm</strong>
                    <br>Dirección
                    <br>Numero de Teléfono
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
                </address>
            </div>
        </div>

        <hr>
    </div>
        <!-- Empieza seccion de fotos -->
          <div class="row">
              <div class="col-xs-12 col-md-6 foto1">

              </div>
              <div class="col-xs-12 col-md-6 descripcion1">
                <h2 class='subtitulo' style="color : white">Elegí que idioma hablas y queres aprender</h2>
              </div>
          </div>
          <div class="row">

              <div class="col-xs-12 col-md-6 descripcion2 hidden-xs hidden-sm">
                <h2 class='subtitulo' style="color : white">Conectate con otros usuarios</h2>
              </div>
              <div class="col-xs-12 col-md-6 foto2 hidden-xs hidden-sm">

              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-md-6 foto3">

              </div>
              <div class="col-xs-12 col-md-6 descripcion3">
                <h2 class='subtitulo' style="color : white">Empeza a aprender idiomas con Tandm!</h2>
              </div>
          </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div style='color:black' class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Tandm 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

</div>
    <!-- /.container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
