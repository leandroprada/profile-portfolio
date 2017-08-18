<?php
	require_once("soporte.php");

?>

<nav id="mainNav" class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">Tandm</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
<li><a class="page-scroll"><?php if ($auth->estaLogueado()) { ?>
	 <?php
	$usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);

echo "Hola ".($usuario->getNombre()). " ¡Bienvenido!";
}?></a></li>
<?php if ($auth->estaLogueado()) { ?>
<li>
		<a class="page-scroll" href="posts.php" >Publicaciones</a>
</li>
<li>
		<a class="page-scroll" href="search_perfiles.php">Buscar Usuarios</a>
</li>
		<?php }?>
								<li>
                    <a class="page-scroll" href="about.php">Nosotros</a>
                </li>
                <li>
                    <a class="page-scroll" href="faq.php">Preguntas Frecuentes</a>
                </li>
<?php if ($auth->estaLogueado()) { ?>
								<a href="logout.php"><button type="button" class="btn btn-default navbar-btn" >Logout</button></a>

								<?php }?>

<?php if (!$auth->estaLogueado()) { ?>
								<a href="login2.php"><button type="button" class="btn btn-default navbar-btn">Ingresa</button></a>

                <a href="registrate.php"><button type="button" class="btn btn-default navbar-btn" >Registrate</button></a>
<?php }?>
						</ul>
            </ul>
        </div>
    </div>


</nav>
