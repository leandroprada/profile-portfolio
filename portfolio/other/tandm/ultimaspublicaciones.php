<div class="table-responsive">
   <table class="table table-bordered" id="tabla">
   <thead>
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
      <?php echo $registro->getNombre()." ".$registro->getApellido()  ; ?>
   &nbsp;escribió:
      <?php echo $row['titulo']; ?>

    </div>
    <div class="modal-content" style="padding:20px;font-weight:bolder">
      <?php echo $row['cuerpo']; }?>
    </div>
   </div>
   </div>
   </tr>
   </tbody>
   </table>

</div>
