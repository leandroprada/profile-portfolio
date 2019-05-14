<?php
    require_once("soporte.php");
    require_once("clases/validadorUsuario.php");

    $repoUsuarios = $repo->getRepositorioUsuarios();

    if ($auth->estaLogueado()) {
        header("Location:index.php");exit;
    }
    $errores = [];
    $nombreDefault = "";
    $emailDefault = "";



    if (!empty($_POST))
    {
        $validador = new ValidadorUsuario();
        //Se envió información
        $errores = $validador->validar($_POST, $repo);

        if (empty($errores))
        {
            //No hay Errores

            //Primero: Lo registro
            $usuario = new Usuario(
                null,
                $_POST["usuario"],
                null,
                $_POST["nombre"],
                $_POST["correoElectronico"]
                        );
            $usuario->setPassword($_POST["password"]);
            $usuario->guardar($repoUsuarios);

            //Segundo: Lo envio al exito
            header("Location:exito.php");exit;


        }

        if (!isset($errores["nombre"]))
        {
            $nombreDefault = $_POST["nombre"];
        }
        if (!isset($errores["correoElectronico"]))
        {
            $emailDefault = $_POST["correoElectronico"];
        }
    }
?>
<!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta name="viewport"
content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/styles.css">
  <title>Alta Usuario Nuevo - LAP</title>



</head>
<body  id="page-top">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro' >

<div class="row">



<div class="col-xs-12 row">

          <form
       action="" method="POST" id="miFormulario">
       <div id="errores" display="none" class="errores">
  <?php include("errores.php"); ?>
       </div>

<div class="col-xs-12 col-md-6 col-md-offset-3" >
         <legend>Datos del Usuario</legend>
         <div ><label for="usuario">Usuario: </label><input type="text"
         class="form-control" name="usuario" placeholder="Usuario (Ej. Usuario123#)" id="usuario" minlength="6"   onblur="checkTextField(this);"></div>
         <span><label for="pass">Contraseña: </label>
         <input type="password"
         class="form-control" name="password" placeholder="Numeros y letras (minimo 8 caracteres)" id="pass" minlength="8" required onblur="checkTextField(this);"></span>



     <label for="nombre">Nombre: </label>
                         <input type="text"
                      class="form-control"  name="nombre" value='<?=$nombreDefault?>' placeholder="Luis" id="nombre" required onblur="checkTextField(this);">
                      <?php if (isset($errores["name"])) {
                          echo $errores["name"];
                      }
                      ?>



               <label for="email">Email: </label><input type="email" class="form-control" value='<?=$emailDefault?>'name="correoElectronico"
             placeholder="luis@email.com" id="email" required onblur="checkTextField(this);">

             <?php if (isset($errores["correoElectronico"])) {
    echo $errores["correoElectronico"];
}
?>



                  <div class="col-xs-12 center" style="padding-top:20px">

                      <input  id="enviar"  type="submit" method="post" class='btn btn-default btn-md' value="ENVIAR"></button>

                    <input  type="reset"  class='btn btn-default btn-md' value="BORRAR"></button>
                  </div>


       </form>

</div>

</div>





      </div>

      <footer>
                  <p>Copyright &copy; LAP 2016</p>
      </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>

</html>
