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
                null,null,
                $_POST["nombre"],
                $_POST["apellido"],
                $_POST["correoElectronico"],
                  $_POST["telefono"],
                $_POST["genero"],

                $_POST["idioma_a_practicar"],
                $_POST["idioma_que_hablo"],
                $_POST["pais"],
                $_POST["ciudad"]
                        );
            $usuario->setPassword($_POST["password"]);
            $usuario->setConfPassword($_POST["conf_password"]);
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
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Alta Usuario Nuevo - Tandm</title>



</head>
<body  id="page-top">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro' >

<div class="row">



<div class="col-xs-12">

          <form
       action="" method="POST" id="miFormulario">
       <div id="errores" display="none" class="errores">
  <?php include("errores.php"); ?>
       </div>

<div class="col-xs-12 col-sm-4" >
         <legend>Datos de la Cuenta</legend>
         <div ><label for="usuario">Usuario: </label><input type="text"
         class="form-control" name="usuario" placeholder="Usuario (Ej. Usuario123#)" id="usuario" minlength="6"  required onblur="checkTextField(this);"></div>
         <span><label for="pass">Contraseña: </label>
         <input type="password"
         class="form-control" name="password" placeholder="Numeros y letras (minimo 8 caracteres)" id="pass" minlength="8" required onblur="checkTextField(this);"></span>
         <label for="pass2">Repetir contraseña: </label>
         <span>

         <input type="password"
         class="form-control" name="conf_password"
         placeholder="Repetir Contraseña" id="pass2"  minlength="8" required onblur="comprobarPass();"></span>
       </div>

<div class="col-xs-12 col-sm-4" >
       <legend>Datos Personales</legend>

<div style="text-align:justify">


     <label for="nombre">Nombre: </label>
                         <input type="text"
                      class="form-control"  name="nombre" value='<?=$nombreDefault?>' placeholder="Luis" id="nombre" required onblur="checkTextField(this);">
                      <?php if (isset($errores["name"])) {
                          echo $errores["name"];
                      }
                      ?>

                              <label for="apellido">Apellido: </label>
                              <input type="text" class="form-control"  name="apellido"
                             placeholder="Gomez" id="apellido" required onblur="checkTextField(this);">

               <label for="email">Email: </label><input type="email" class="form-control" value='<?=$emailDefault?>'name="correoElectronico"
             placeholder="luis@email.com" id="email" required onblur="checkTextField(this);">

             <?php if (isset($errores["correoElectronico"])) {
    echo $errores["correoElectronico"];
}
?>
                   <label for="tel">  Teléfono:</label>

         <input type="tel" class="form-control" name="telefono" placeholder="+5491155556666" id="tel" required onblur="checkTextField(this);">
                  <span  >Sexo: <input type="radio"
         name="genero" checked class="gen" id="masculino" value="masculino"><label for="masculino">Masculino</label>

         <input type="radio" name="genero" class="gen" id="femenino" value="femenino"><label for="femenino">Femenino</label>
</span>
</div>
       </div>

    <div class="col-xs-12 col-sm-4" >




       <legend>Intereses</legend>



       <label for="idiomas1">Idioma que quiero practicar:
       </label>

         <select name="idioma_a_practicar" class="form-control" id="idiomas1" onfocus="recorrerIdiomas1();"> </select>
         <label for="idiomas2">Idioma que hablo:
         </label>

           <select name="idioma_que_hablo" class="form-control" id="idiomas2" onfocus="recorrerIdiomas2();"> </select>

       <label for="paises">Pais: </label>
       <select name=pais id="paises" class="form-control" >
           <option></option>
         </select>



           <label for="ciudad">Ciudad: </label><input type="text" class="form-control" name="ciudad" placeholder="Ciudad o Localidad" required onblur="checkTextField(this);">


                  </div>
                  <div class="col-xs-12 center" style="padding-top:20px">

                      <input  id="enviar"  type="submit" method="post" class='btn  btn-md' value="ENVIAR"></button>

                    <input  type="reset"  class='btn  btn-md' value="BORRAR"></button>
                  </div>


       </form>

</div>

</div>




      </div>

      <footer>
                  <p>Copyright &copy; Tandm 2016</p>
      </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/paises.js"></script>
<script src="js/form_verify.js"></script>


</body>

</html>
