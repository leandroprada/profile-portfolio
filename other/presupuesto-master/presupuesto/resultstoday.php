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
  <title>Filtrar Publicaciones por fecha</title>



</head>
<body  id="page-top" >

  <?php    require_once ("navbar.php")  ?>


<div class='container-fluid registro'  >


<?php


$maildeusuario = $usuarioLogueado->getEmail();
$con=mysqli_connect("localhost","u532595178_root","Leandro01","u532595178_user");
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
  <a onclick="dateNow(filtro)" href="#" style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)" class="btn btn-outline-default btn-default ">HOY</a>
<input id="filtro" type="text"    value="2016-02-28" name="filtro" required/>


  <label for="fecha">y:  </label>
  <a onclick="dateNow(filtro2)" href="#" style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)" class="btn btn-outline-default btn-default ">HOY</a>
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

    <?php if($_POST) {?>
<tr>
  <h3>Estan son tus publicaciones entre el <?php echo $date1 ?> y el <?php echo $date2 ?>
    <!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
  </h3>
  <?php } ?>
  <?php if(!$_POST) { ?>
    <h3>Por favor seleccioná una fecha</h3>
    <?php } ?>
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








<?php
   mysqli_close($con);
 ?>




</div>
</div>
</body>
<script type="text/javascript">
function dateNow(j) {
var dia = new Date();
var dd =dia.getDate();
var mm =dia.getMonth()+1;
var yyyy = dia.getFullYear();

if (dd<10){dd='0'+dd}
if (mm<10){mm='0'+mm}
dia= yyyy+'-'+mm+'-'+dd
     j.value =dia;
}
</script>


</html>
