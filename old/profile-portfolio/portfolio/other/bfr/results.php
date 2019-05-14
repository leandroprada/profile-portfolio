<?php
require_once("soporte.php");
require_once("clases/validadorRegistro.php");
require_once("clases/registro.php");
// require_once("clases/repositorioRegistrosSQL.php")
// require_once("clases/validadorUsuario.php");
// require_once("clases/usuario.php");

$repoUsuarios = $repo->getRepositorioUsuarios();
$repoRegistros = $repo->getRepositorioRegistros();

if ($auth->estaLogueado()) {

  $usuarioLogueado = $auth->traerUsuarioLogueado($repoUsuarios);
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
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Registro de Amamantamiento</title>



</head>
<body  id="page-top" style="background-color:rgba(156, 39, 176, 0.6)">

  <?php    require_once ("navbar.php")  ?>


<div class='container-fluid registro'  >


<?php
$maildeusuario = $usuarioLogueado->getEmail();
$con=mysqli_connect("localhost","root","","bfr");
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
<div class="table-responsive">
   <table class="table table-bordered" id="tabla">
   <thead>
   <tr>
   <!-- <th>#</th>
   <th>Email</th> -->
   <th>Fecha</th>
   <th>Hora</th>

   <th>Total</th>

 <th>Leche Maternizada cm3</th>
 <th>Leche Materna cm3</th>
 <th>Izq(min)</th>
 <th>Der(Min)</th>
 <th>Pezonera Izq</th>
 <th>Pezonera Der</th>
   </tr>
   </thead>
   <tbody>
   <?php
  //  $i = 1;
   while($row = mysqli_fetch_array($result))
     {?>


    <tr>

<td>
  <?php echo  $row['fecha']; ?>
</td>
<td>
  <?php echo date('G:i', strtotime($row['hora']));

  ?>

</td>

<td>
  <?php
  if(!$row['total']){
    echo "-";}
    echo  $row['total']; ?>
</td>
<td>
  <?php
  if(!$row['lech_mat']){
    echo "-";}
    echo  $row['lech_mat']; ?>


</td>

<td>
  <?php
  if(!$row['lech_madre']){
    echo "-";}
    echo  $row['lech_madre']; ?>

</td>
<td>
  <?php
if(!$row['pecho_izquierdo']){
  echo "-";}
  echo  $row['pecho_izquierdo']; ?>

</td>
<td>
  <?php
  if(!$row['pecho_derecho']){
    echo "-";}
    echo  $row['pecho_derecho']; ?>
</td>
<td>
  <?php
  if ($row['pez_izq']==1){
    echo "si";
  }
  else {
  echo "no";
}?>

</td>
<td>
  <?php
  if ($row['pez_der']==1){
    echo "si";
  }
  else {
  echo "no";
}?>
</td>


          </tr>
<?php } ?>
  </tbody>
</table>







</div>
</div>

</body>

</html>
