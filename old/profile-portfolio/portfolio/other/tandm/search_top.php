<?php
$maildeusuario = $usuarioLogueado->getEmail();
// $con=mysqli_connect("localhost","root","","tandm50");
   // Check connection
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

<div class="table-responsive col-xs-12 col-md-8 col-md-offset-2">
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



<div class="col-xs-4 ">
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
</form>


</div>

<?php echo"
  <p>Seleccioná un par de idiomas </p>
";?>
