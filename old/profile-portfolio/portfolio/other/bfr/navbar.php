<?php
	require_once("soporte.php");

?>

<nav id="mainNav" class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">A(mamá)ntame</a>
						<img src="images/amamanta.jpg" alt="" height="50px" />
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<?php if ($auth->estaLogueado()) { ?>
							<li style="padding-right:20px"><a href="results.php"><button type="button" style="text-decoration:none" class="btn-xl btn-default navbar-btn" >Ver Todos los Registros</button></a></li>
							<li style="padding-right:20px"><a href="resultstoday.php"><button type="button" style="text-decoration:none" class="btn-xl btn-default navbar-btn" >Ver Registros por Fecha</button></a></li>
							<li style="padding-right:50px"><a href="form.php" style="text-decoration:none"><button type="button" class="btn-xl btn-default navbar-btn" >Cargar Otra Toma</button></a></li>
 <?php } ?>
<li><h4 class="navbar"><?php if ($auth->estaLogueado()) { ?>
	 <?php
	$usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);
echo "Hola ".($usuario->getEmail()). " ¡Bienvenido/a!";
}?></h4></li>



<?php if ($auth->estaLogueado()) { ?>
								<a href="logout.php"><button type="button" class="btn-lg btn-default navbar-btn" style="text-decoration:none">Logout</button></a>



								<?php }?>

<?php if (!$auth->estaLogueado()) { ?>
								<a href="login2.php"><button type="button" class="btn btn-default navbar-btn"style="text-decoration:none">Ingresa</button></a>

                <a href="registrate.php"><button type="button" class="btn btn-default navbar-btn" style="text-decoration:none" >Registrate</button></a>
<?php }?>
						</ul>
            </ul>
        </div>
    </div>
</nav>
