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

  <title>Buscar Otros Usuarios</title>
</head>
<body  id="page-top" >
  <?php    require_once ("navbar.php")  ?>
<div class='container-fluid registro'  >


<?php
$maildeusuario = $usuarioLogueado->getEmail();

   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
     $langUserSpeaks= '"'.$usuarioLogueado->getHablaIdioma().'"';
$langUserLearns= '"'.$usuarioLogueado->getAprendeIdioma().'"';

if ($maildeusuario=='leandroprada@gmail.com'){
$result = mysqli_query($con,'SELECT * FROM usuarios');

}
else {
  $result = mysqli_query($con,'SELECT * from usuarios where idioma_que_hablo = '.$langUserSpeaks.' AND idioma_a_practicar= '.$langUserLearns);
}?>

<div class="table-responsive col-xs-12 col-md-6">
   <table class="table table-bordered" id="tabla">
   <thead>
   <tr>
<h3>Usuarios que comparten el par lingüístico contigo
  <!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
</h3>
   </tr>
<tr>
  <span>Pares de Idiomas: <?php echo $usuarioLogueado->getHablaIdioma()." - ".
$usuarioLogueado->getAprendeIdioma(); ?></span>
<!-- <span class="">
  <a href=".php"><button type="button" class="btn btnposts" name="button">Invertir Pares Lingüísticos</button></a></span> -->

  </tr>
  <tr>

  <th>#</th>
  <th>Nombre</th>
  <th>Pares Lingüísticos</th>
  <th>País</th>
  <th>Contacto</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
  while($row = mysqli_fetch_array($result))
    {?>
<?php if (($row['correoElectronico'])==($usuarioLogueado->getEmail()))
{echo "No se encontraron usuarios"; }
else {


 ?>
   <tr>
     <th scope="row"><?php echo $i++ ?></th>
     <td>
 <?php echo $row['nombre']." ".$row['apellido'];?>
</td>
<td>
  <?php echo $row['idioma_que_hablo']." ".$row['idioma_a_practicar'];?>

</td>
<td>
<?php echo $row['pais'];?>

</td>
<td>

 <!-- Button trigger modal -->
 <button type="button" class="boton-titulos" data-toggle="modal" data-target="#myModal<?php echo $i-1; ?>">
   Contacto

 </button>

</td>
</tr>
<tr>
 <!-- Modal -->

<div class="modal fade" id="myModal<?php echo $i-1; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel3" aria-hidden="true">
 <div class="modal-dialog " role="document">
   <div class="modal-content" style="background-color:#78A4B3;padding:20px">
Contacta a <?php echo $row['nombre']." ".$row['apellido'];?>
   </div>
   <div class="modal-content" style="padding:20px;font-weight:bolder">
     <?php echo $row['correoElectronico'];?>
   </div>
 </div>
</div>
</tr>
 </tbody>
 <?php } ?>
 <?php } ?>
</table>

</div>

    <div class="col-xs-12 col-md-6">
      <h3>Buscar Otros Usuarios
        <!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
      </h3>
    <form class="form-group" action="" method="post">
      <label for="idiomas1">Idioma que quiero practicar:
      </label>

        <select name="idioma_a_practicar" class="form-control" id="idiomas1"  onfocus="recorrerIdiomas1();"> </select>
        <label for="idiomas2">Idioma que hablo:
        </label>


      <select name="idioma_que_hablo" class="form-control" id="idiomas2" onfocus="recorrerIdiomas2();"> </select>

      <input  class='btn  btn-md'id="enviar"  type="submit" method="post"   value="BUSCAR"style="text-decoration:none" ></button>

      <?php $result1 = ""; ?>
        <?php
        if ($_POST){


             $langUserSpeaksp= '"'.$_POST['idioma_que_hablo'].'"';
        $langUserLearnsp= '"'.$_POST['idioma_a_practicar'].'"';

        if ($maildeusuario=='leandroprada@gmail.com'){
        $result1 = mysqli_query($con,'SELECT * FROM usuarios');

        }
        else {
          $result1 = mysqli_query($con,'SELECT * from usuarios where idioma_que_hablo = '.$langUserSpeaksp.' AND idioma_a_practicar= '.$langUserLearnsp);

      }
    }?>
      <?php
      if (!$_POST){ echo"
        <p>Seleccioná un par de idiomas </p>
      ";}?>
        <div class="row">

        <div class="table-responsive col-xs-12">
           <table class="table table-bordered" id="tabla">
           <thead>
           <tr>

           </tr>
        <tr>
          <span>Pares de Idiomas: <?php if ($_POST){echo $langUserSpeaksp." - ".$langUserLearnsp; }?></span>
        <!-- <span class="">
          <a href=".php"><button type="button" class="btn btnposts" name="button">Invertir Pares Lingüísticos</button></a></span> -->

          </tr>
          <tr>

          <th>#</th>
          <th>Nombre</th>
          <th>Pares Lingüísticos</th>
          <th>País</th>
          <th>Contacto</th>
          </tr>
          </thead>
          <tbody>
          <?php
          if ($_POST){
          $j = 1;

          while($row = mysqli_fetch_array($result1))
            {?>


           <tr>
             <th scope="row"><?php echo $j++ ?></th>
             <td>
         <?php echo $row['nombre']." ".$row['apellido'];?>
        </td>
        <td>
          <?php echo $row['idioma_que_hablo']." ".$row['idioma_a_practicar'];?>

        </td>
        <td>
        <?php echo $row['pais'];?>

        </td>
        <td>

         <!-- Button trigger modal -->
         <button type="button" class="boton-titulos" data-toggle="modal" data-target="#myModalx<?php echo $j-1; ?>">
           Contacto

         </button>

        </td>
        </tr>
        <tr>
         <!-- Modal -->

        <div class="modal fade" id="myModalx<?php echo $j-1; ?>" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel3" aria-hidden="true">
         <div class="modal-dialog " role="document">
           <div class="modal-content" style="background-color:#78A4B3;padding:20px">
        Contacta a <?php echo $row['nombre']." ".$row['apellido'];?>
           </div>
           <div class="modal-content" style="padding:20px;font-weight:bolder">
             <?php echo $row['correoElectronico'];?>
           </div>
         </div>
        </div>
        </tr>
         </tbody>
<?php } ?>
        </table>

        </div>
        </div>
      </form>
      </div>
      <?php
    } ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/paises.js"></script>

</body>

</html>
