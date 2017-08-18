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
$today = (new \DateTime())->format('Y-m-d');
?>
<form class="row" action="" method="post">


<div class="navbar-light"style="padding-bottom:20px">
  <label for="fecha">Filtrar entre: </label>
  <a onclick="dateNow(filtro,filtro2)" href="#" style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)" class="btn btn-outline-default btn-default ">HOY</a>
<input id="filtro" type="text"    value="2016-02-28" name="filtro" required/>


  <label for="fecha">y:  </label>

<input id="filtro2" type="text"    value="2016-02-28" name="filtro2" required/>
<input  class='btn  btn-md'id="enviar"  type="submit" method="post"   value="FILTRAR RESULTADOS Por Fecha"style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)" ></button>
</div>
</form>
<?php

if ($_POST) {
$date1=$_POST["filtro"];
$date2=$_POST["filtro2"];
if ($maildeusuario=='leandroprada@gmail.com'){
 $result = mysqli_query($con,'SELECT * FROM registros Where fecha between '.$date1.' AND '.$date2.'' );
 // var_dump($result);exit;
}
else {
   $result = mysqli_query($con,'SELECT * FROM registros Where correoElectronico ="'.$maildeusuario.'"AND fecha between "'.$date1.'" AND "'.$date2.'"');
}
}

if (!$_POST){}


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









<?php
   mysqli_close($con);
 ?>




</div>
</div>
</body>
<script type="text/javascript">
function dateNow(j,i) {
var dia = new Date();
var dd =dia.getDate();
var mm =dia.getMonth()+1;
var yyyy = dia.getFullYear();

if (dd<10){dd='0'+dd}
if (mm<10){mm='0'+mm}
dia= yyyy+'-'+mm+'-'+dd
     j.value =dia;
     i.value =dia;
}
</script>


</html>
