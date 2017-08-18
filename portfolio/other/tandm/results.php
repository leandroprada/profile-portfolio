


<?php
require_once("soporte.php");
require_once("clases/validadorRegistro.php");
require_once("clases/registro.php");
// require_once("clases/repositorioRegistrosSQL.php")
// require_once("clases/validadorUsuario.php");
require_once("clases/usuario.php");

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
<!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta name="viewport"
content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/FAQ.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Mis posteos</title>



</head>
<body  id="page-top" >

  <?php    require_once ("navbar.php")  ?>


<div class='container-fluid registro'  >


<?php
$maildeusuario = $usuarioLogueado->getEmail();
// $con=mysqli_connect("localhost","root","","tandm50");
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
     $result ="";
 if ($maildeusuario=='leandroprada@gmail.com'){
  $result = mysqli_query($con,'SELECT * FROM registros');

}
else {
   $result = mysqli_query($con,'SELECT * FROM registros Where correoElectronico ="'.$maildeusuario.'"');
}
?>
<div class="row">

<div class="col-xs-2">
  <a href="posts.php"><button type="button" name="button" class=" btnposts">
    <i class="fa fa-toggle-left" style="font-size:20px">&nbsp;Volver a Publicaciones</i>

  </button></a></div>
</div>
<div class="table-responsive">
   <table class="table table-bordered" id="tabla">
   <thead>
   <tr>
<h3>Estan son tus últimas publicaciones
  <!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
</h3>
   </tr>
   <tr>

   <th>#</th>
   <th>Usuario</th>
   <th>Fecha Publicación</th>
   <th>Titulo (haga click para ver el cuerpo del mensaje)</th>
   <!-- <th>Mensaje</th> -->

   </tr>
   </thead>
   <tbody>
   <?php
   $i = 1;
   while($row = mysqli_fetch_array($result))
     {?>


    <tr>
      <th scope="row"><?php echo $i++ ?></th>

<td>
  <?php $usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);

echo $usuario->getNombre()." ".$usuario->getApellido()  ; ?>
</td>
<td>
  <?php echo  $row['fecha']; ?>
</td>
<td>

  <!-- Button trigger modal -->
  <button type="button" class="boton-titulos" data-toggle="modal" data-target="#myModal<?php echo $i-1; ?>">
    <?php echo $row['titulo']; ?>

  </button>

</td>
</tr>
<tr>
  <!-- Modal -->

<div class="modal fade" id="myModal<?php echo $i-1; ?>" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content" style="background-color:#78A4B3;padding:20px">
    <?php echo $usuario->getNombre()." ".$usuario->getApellido()  ; ?> &nbsp;escribió:
      <?php echo $row['titulo']; ?>

    </div>
    <div class="modal-content" style="padding:20px;font-weight:bolder">
      <?php echo $row['cuerpo']; ?>
    </div>
  </div>
</div>
</tr>
  </tbody>
  <?php } ?>
</table>






</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
