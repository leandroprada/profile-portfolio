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
  <link rel="stylesheet" href="css/FAQ.css">

  <title>Preguntas frecuentes - Tandm</title>
</head>

  <body  id="page-top">
<?php  require_once ("navbar.php") ?>

      <div class='cuerpo'>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default" onclick="toggle_visibility('respuesta')">
            <div class="panel-heading">

<div class="" >
  <div class="">
<h4>  1. ¿Qué es Tandm?
</h4></div>
<div id="respuesta" style="display:none">
Tandm es una red de intercambio linguistico y cultural. Mediante ella podés contactarte, en persona o por mensajería instantanea, con otra gente que esté buscando practicar el mismo idioma que vos.
</div></div></div></div>

<div class="panel panel-default" onclick="toggle_visibility('respuesta2')">
  <div class="panel-heading">

<div class="">
<div class="">
<h4>  2: ¿A que refiere el nombre?
</h4></div>
<div id="respuesta2" style="display:none">
La definición de “tándem” refiere a la unión de dos personas para desarrollar una actividad en común aunando esfuerzos. De eso se trata nuestro sitio y por eso elegimos ese nombre.
</div></div></div></div>

<div class="panel panel-default" onclick="toggle_visibility('respuesta3')">
  <div class="panel-heading">

<div class="">
<div class="">
<h4>  3. ¿Puedo usar Tandm desde cualquier lugar del mundo?
</h4></div>
<div id="respuesta3" style="display:none">
Si; nuestro sitio apunta a una audiencia global. Está en la propia filosofía del sitio que se produzcan intercambios culturales entre personas residentes en distintos lugares del mundo, y de diferentes nacionalidades.
</div></div></div></div>


<div class="panel panel-default" onclick="toggle_visibility('respuesta4')">
  <div class="panel-heading">

<div class="">
<div class="">
<h4>  4. ¿Hay que pagar para usar Tandm?
</h4></div>
<div id="respuesta4" style="display:none">
No; nuestro servicio es completamente gratuito.
</div></div></div></div>


<div class="panel panel-default" onclick="toggle_visibility('respuesta5')">
  <div class="panel-heading">

<div class="">
<div class="">
<h4>  5: ¿Cómo puedo registrarme?
</h4></div>
<div id="respuesta5" style="display:none">
Registrarte en nuestro sitio es muy simple! Simplemente cliqueá en el botón arriba a la derecha que dice “Registrate”; y luego seguí los pasos.
</div></div></div></div>

<div class="">
  <h3 class="opciondecontacto">¿Alguna otra duda?<a href="about.php"> Contáctese con nosotros</a></h3>

</div>



</div>
</div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
<!--
    function toggle_visibility(respuesta) {
       var e = document.getElementById(respuesta);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
</body>
</html>
