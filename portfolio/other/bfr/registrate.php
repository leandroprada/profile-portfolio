<?php
    require_once("soporte.php");
    require_once("clases/validadorUsuario.php");

    $repoUsuarios = $repo->getRepositorioUsuarios();

    if ($auth->estaLogueado()) {
        header("Location:form.php");exit;
    }
    $errores = [];
    // $nombreDefault = "";
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
                $_POST["correoElectronico"]
                        );
            // $usuario->setPassword($_POST["password"]);
            // $usuario->setConfPassword($_POST["conf_password"]);
            $usuario->guardar($repoUsuarios);
            function guardarCookieregistro($usuario) {
                setcookie("usuarioLogueado", $_POST["correoElectronico"], time() + 3600 * 24);
            }

            guardarCookieregistro();
            //Segundo: Lo envio al exito
            header("Location:exito.php");exit;


        }

        // if (!isset($errores["nombre"]))
        // {
        //     $nombreDefault = $_POST["nombre"];
        // }
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
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Alta Email</title>



</head>
<body  id="page-top" style="background-color:rgba(156, 39, 176, 0.5)">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro' >

<div class="row">



<div class="col-xs-12">

          <form
       action="" method="POST" id="miFormulario">
       <div id="errores" display="none" class="errores">
  <?php include("errores.php"); ?>
       </div>

<div class="col-xs-12 center" >
         <legend><h2>Registra tu email</h2></legend>

               <label for="email">Email: </label><input type="email" class="form-control" value='<?=$emailDefault?>'name="correoElectronico"
             placeholder="luis@email.com" id="email" required onblur="checkTextField(this);">

             <?php if (isset($errores["correoElectronico"])) {
    echo $errores["correoElectronico"];
}
?>

</div>
       </div>
                  <div class="col-xs-12 center" style="padding-top:20px">

                      <input  id="enviar"  type="submit" method="post" class="btn-lg btn-default navbar-btn" style="text-decoration:none" value="ENVIAR"></button>

                    <input  type="reset"  class="btn-lg btn-default navbar-btn" style="text-decoration:none;padding-right:90px" value="BORRAR"></button>
                  </div>


       </form>

</div>

</div>





      </div>

      <footer>
                  <p>Copyright &copy; BFR 2016</p>
      </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/form_verify.js"></script>

<script src="js/exito.js"></script>


</body>

</html>
