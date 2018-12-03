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
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/styles.css">
  <title>Mis Gastos</title>



</head>
<body  id="page-top" >

  <?php    require_once ("navbar.php")  ?>


<div class='container-fluid registro'  >


<?php
$con=mysqli_connect("localhost","u532595178_root","Leandro01","u532595178_user");
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }

  $result = mysqli_query($con,'SELECT * FROM registros');

?>
<div class="table-responsive">
   <table class="table table-bordered" id="tabla">
   <thead>
   <tr>
<h3>Estos son tus ultimos gastos
  <!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
</h3>
   </tr>
   <tr>

   <th>#</th>
   <th>Fecha</th>
   <th>Descripción</th>
   <th>Ingresos</th>
   <th>Gastos</th>

   </tr>
   </thead>
   <tbody>
   <?php
   $i = 1;

   while($row = mysqli_fetch_array($result))
     {?>


    <tr>
<td>
  <?php echo $i++ ?>

</td>

<td>
  <?php echo  $row['fecha']; ?>
</td>
<td>
  <?php echo $row['descripcion']; ?>

</td>
<td>
  <?php
if ($row['ingreso']) {
  echo $row['ingreso'];
}
else {
  echo "0";} ?>
</td>
<td>
  <?php
if ($row['egreso']) {
  echo $row['egreso'];
}
else {
  echo "0";} ?></td></tr>
<?php } ?>
  </tbody>
</table>







</div>
</div>

</body>

</html>
