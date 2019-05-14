<?php
    require_once("soporte.php");
    require_once("clases/validadorRegistro.php");
    require_once("clases/registro.php");


    $repoUsuarios = $repo->getRepositorioUsuarios();
    $repoRegistros = $repo->getRepositorioRegistros();

    if ($auth->estaLogueado()) {
      $usuarioLogueado = $auth->traerUsuarioLogueado($repoUsuarios);
    }


    $errores = [];
    $nombreDefault = "";
    $emailDefault = "";
$registro ="";


    if (!empty($_POST))
    {

        // // $validador = new ValidadorRegistro();
        // // //Se envió información
        // $errores = $validador->validar($_POST, $repo);
        //
        // if (empty($errores))
        // {
            //No hay Errores
            //Primero: Lo registro

            $registro = new Registro(
            null,
            $_POST['correoElectronico'],
              $_POST['fecha'],
              $_POST['titulo'],
              $_POST['cuerpo'],
              $_POST['idioma_que_hablo'],
              $_POST['idioma_a_practicar']
);

            $registro->guardar($repoRegistros);

            //Segundo: Lo envio al exito
            header("Location:exito2.php");exit;




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
  <title>Nueva Publicacion - Tandm</title>



</head>
<body  id="page-top">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro'  >

<div class="row">



<div class="">

          <form
       action="" method="POST" id="miFormulario" class=" ">
       <div id="errores" display="none" class="errores ">
  <?php include("errores.php"); ?>
       </div>

<div class=" center col-xs-12  " >
  <legend>Nueva Publicación</legend>
  <div ><label for="fecha">Email: </label><input type="email"
  class="form-control" name="correoElectronico" placeholder="user@email.com" id="email"  required onblur="checkTextField(this);" value="
  <?php if ($auth->estaLogueado()) {
  	$usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);
  echo $usuario->getEmail();
$idiomas1 = $usuario->getAprendeIdioma();
$idiomas2 = $usuario->getHablaIdioma();

}  ?>">
</div>


<label for="idiomas1">Idioma que quiero practicar:
</label>

  <select name="idioma_a_practicar" class="form-control" id="idiomas1"  onfocus="recorrerIdiomas1();"> </select>
  <label for="idiomas2">Idioma que hablo:
  </label>

    <select name="idioma_que_hablo" class="form-control" id="idiomas2" onfocus="recorrerIdiomas2();"> </select>

<div class="">
             <label for="fecha">Presione el bóton para fecha de </label>
             <a onclick="dateNow(test2)" href="#" style="text-decoration:none" class="btn btn-outline-default btn-default ">HOY</a>
  <input id="test2" type="text"    value="2016-02-28" name="fecha" required/>
           </div>

           <div class="">
             <label for="titulo">Título</label>

  <input id="titulo" type="text" placeholder="Ingrese su título" name="titulo"class="form-control" required/>
           </div>
<div>
           <label for="cuerpo">Cuerpo de la publicación</label>
         <textarea type="text"
         class="form-control" rows="4" name="cuerpo" placeholder="Escriba aquí su publicación" id="cuerpo" ></textarea></div>


</div>
                 <div class="col-xs-12 center" style="padding-top:20px">

                      <input  class='btn  btn-md'id="enviar"  type="submit" method="post"   value="ENVIAR"style="text-decoration:none" ></button>

                    <input  type="reset"  class='btn  btn-md' style="text-decoration:none"value="BORRAR"></button>
                  </div>


       </form>

</div>

</div>





      </div>


    <footer>
                  <p>Copyright &copy; Tandm 2016</p>
      </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/paises.js"></script>
<script type="text/javascript">
function timeNow(i) {
var d = new Date(),
    h = (d.getHours()<10?'0':'') + d.getHours(),
    m = (d.getMinutes()<10?'0':'') + d.getMinutes();
i.value = h + ':' + m;
}

function dateNow(j) {
var dia = new Date();
var dd =dia.getDate();
var mm =dia.getMonth()+1;
var yyyy = dia.getFullYear();

if (dd<10){dd='0'+dd}
if (mm<10){mm='0'+mm}
dia= yyyy+'-'+mm+'-'+dd
     j.value =dia;
}


function mostrar(id) {
    document.getElementById(id).style.display = 'block';
}
function ocultar(id) {
    document.getElementById(id).style.display = 'none';
}


</script>

<script src="js/form_verify.js"></script>


</body>

</html>
