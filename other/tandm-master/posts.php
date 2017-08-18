<?php
	require("soporte.php");
	require_once("clases/validadorRegistro.php");
	require_once("clases/registro.php");
	$repoUsuarios = $repo->getRepositorioUsuarios();
	$repoRegistros = $repo->getRepositorioRegistros();

	if ($auth->estaLogueado()) {

	  $usuarioLogueado = $auth->traerUsuarioLogueado($repoUsuarios);
	}
	else {
	    header("Location:index.php");exit;
	}
	// var_dump($usuarioLogueado);exit;
	// var_dump(traerRegistrosPorEmail());
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

  <title>Publicaciones - Tandm</title>
</head>
<body class="container" id="body-top" style="Color:white">
	<?php    require_once ("navbar.php")  ?>

	<?php 	$maildeusuario = $usuarioLogueado->getEmail();
	   if (mysqli_connect_errno())
	     {
	     echo "Failed to connect to MySQL: " . mysqli_connect_error();
	     }
	$datetoday = (new \DateTime())->format('Y-m-d');
$date1 = '"'.$datetoday.'"';
	// desde acá calculo la fecha en una semana para atrás en formato de mysql
	$year2=(new \DateTime())->format('Y');
$lastweeksday =(new \DateTime())->format('d')-7;
if ($lastweeksday >=1)
{
	$month2=(new \DateTime())->format('m');
}
else {
$month2= (new \DateTime())->format('m')-1;
}
	if ($lastweeksday >9)
	{ $day2 = $lastweeksday-7;}
	else if ($lastweeksday >=1){
		$day2 = "0".$lastweeksday;
	}
	else {
		switch ($month2) {
    case( 1 || 3 || 5 || 7 || 8 || 10 || 12):
        $day2 = 31 + $lastweeksday;
        break;
    case (4 || 6 || 9 || 11):
        $day2 = 30 + $lastweeksday;
        break;
    case 2:
		$day2 = 28 + $lastweeksday;
		break;
}
}
 $date2 = '"'.$year2."-".$month2."-".$day2.'"';
	 if (mysqli_connect_errno())
		 {
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		 }
		 if ($maildeusuario=='leandroprada@gmail.com'){
		  $result = mysqli_query($con,'SELECT * FROM registros');

		 }
		 else {
		$result = mysqli_query($con,'SELECT * FROM registros Where fecha between '.$date1.' AND '.$date2.'');
	}?>

	<div class="col-xs-12">

		<h2>Últimas Publicaciones
		<!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
		</h2>

			<?php require_once('ultimaspublicaciones.php') ?>



<?php require('botonerasposts.php') ?>


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
