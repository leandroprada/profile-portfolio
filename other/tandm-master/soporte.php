<?php
	require_once("clases/auth.php");
	require_once("clases/repositorioJSON.php");
	require_once("clases/repositorioSQL.php");

	$tipoRepositorio = "sql";

	switch($tipoRepositorio) {
		case "json":
			$repo = new RepositorioJSON();
			break;
		case "sql":
			$repo = new RepositorioSQL();
			break;
	}

	$auth = Auth::getInstancia($repo->getRepositorioUsuarios());

	$con=mysqli_connect("localhost","root","","tandm50");
	// $con=mysqli_connect("mysql.hostinger.com.ar","u386033242_root","Leandro01","u386033242_tandm");
	mysqli_set_charset($con, "utf8");

?>
