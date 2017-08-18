<?php
    require_once("soporte.php");
    require_once("clases/validadorRegistro.php");
    require_once("clases/registro.php");


    $repoUsuarios = $repo->getRepositorioUsuarios();

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
            // }$usuarioLogueado->getEmail(),
            $_POST['correoElectronico'],
              $_POST['fecha'],
              $_POST['hora'],
              $_POST['pecho_izquierdo'],
              $_POST['pecho_derecho'],
              $_POST['pez_izq'],
              $_POST['pez_der'],
              $_POST['total'],
              $_POST['lech_mat'],
              $_POST['lech_madre']
);


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
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Bienvenido - Registro de Amamantamiento</title>



</head>
<body  id="page-top" style="background-color:rgba(156, 39, 176, 0.6)">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro'  >

<div class="row">



<div class="col-xs-12">
<h2>
  <?php if ($auth->estaLogueado()) { ?>
  	 <?php
  	$usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);
  echo "Hola ".($usuario->getEmail()). " ¡BIENVENIDO/A A BFR!";?><br>
  <a href="form.php" style="text-decoration:none"><button type="button" class="btn  btn-default navbar-btn" style="text-decoration:none;padding-right:100px">Cargar Toma</button></a>
</h4></li>
<?php }?>
  <?php if ($auth->estaLogueado()) { ?>
    <a href="logout.php"><button type="button" class="btn btn-default navbar-btn" style="text-decoration:none" >Logout</button></a>


  								<?php }?>

  <?php if (!$auth->estaLogueado()) { ?>

    BIENVENIDO/A A BFR <br>Por favor registrate y logueate.
<div class="">
  <a href="login2.php"><button type="button" class="btn btn-default navbar-btn"style="text-decoration:none">Ingresa</button></a>

        <a href="registrate.php"><button type="button" class="btn btn-default navbar-btn" style="text-decoration:none" >Registrate</button></a>
</div>

  <?php }?></h2>


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
dia= dd+'/'+mm+'/'+yyyy
     j.value =dia;
}

function sumarPechos() {
var der =document.getElementById('pecho_derecho').value;
var izq =document.getElementById('pecho_izquierdo').value;
var total =document.getElementById('total');

total.value =Number(der)+Number(izq);

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
