<?php
	require_once("soporte.php");

?>

<nav id="mainNav" class="navbar navbar-default barra">
    <div class="container-fluid">
        <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<a class="navbar-brand page-scroll" href="index.php">LAP</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
					      <li ><a href="index.php">Inicio</a></li>


<li><a class="page-scroll"><?php if ($auth->estaLogueado()) { ?>
	 <?php
	$usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);

echo "Hola ".($usuario->getNombre()). " ¡Bienvenido!";
}?></a></li>
<?php if ($auth->estaLogueado()) { ?>
<li>
		<a class="page-scroll" href="results.php">Ver Gastos</a>
</li>
<li>
		<a class="page-scroll" href="form.php">Cargá un gasto</a>
</li>
		<?php }?>

<?php if ($auth->estaLogueado()) { ?>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Deslogueate</a></li>
	</ul>

								<?php }?>

<?php if (!$auth->estaLogueado()) { ?>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="registrate.php"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>
		<li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span> Ingresá</a></li>
	</ul>

<?php }?>
						</ul>
            </ul>
        </div>
    </div>

</div>

  </div>
</nav>
</div>

</nav>
