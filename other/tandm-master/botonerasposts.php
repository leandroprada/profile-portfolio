<div class="row container">


	<div class="col-xs-6 col-md-3">
		<h2>Publicar
	 <!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
	</h2><a href="form.php"><input type="button" value="Crear Un Post" class="btn btn-default boton-alargado"
	></a>
	</div>







	       <div class="col-xs-6 col-md-3">
					 <h2>Buscar
			 	  <!-- <button type="button" name="button" class="btn-lg" style="text-decoration:none"><a href="resultstoday.php" style="text-decoration:none;color:darkblue">Filtrar Publicaciones por fecha</a></button> -->
			 	</h2>
	       <input type="button" value="Mis Posts" class="btn btn-default boton-alargado"
	       onclick=toggle_visibility("public_self")>
	       <input type="button" value="Todos los Posts" class="btn btn-default boton-alargado"
	       onclick=toggle_visibility("public_gen")>
	       </div>
         <?php require('hiddendivs.php') ?>
</div>
