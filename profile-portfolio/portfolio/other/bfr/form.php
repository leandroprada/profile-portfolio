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
              $_POST['hora'],
              $_POST['pecho_izquierdo'],
              $_POST['pecho_derecho'],
              $_POST['pez_izq'],
              $_POST['pez_der'],
              $_POST['total'],
              $_POST['lech_mat'],
              $_POST['lech_madre']

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
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/FAQ.css">
  <title>Nuevo Registro de Amamantamiento</title>



</head>
<body  id="page-top" style="background-color:rgba(156, 39, 176, 0.6)">

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro'  >

<div class="row">
    <div class="col-xs-12">
      <h2 >Tiempo trascurrido: <time id="contador">00:00:00</time></h2>
    <button id="start" class='btn btn-lg' style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:black">Comenzar</button>
    <button id="stop"class='btn  btn-lg' style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:black">Parar</button>
    <button id="clear" class='btn  btn-lg' style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:black">Reiniciar</button>
    </div>
<div class="col-xs-12">
          <form
       action="" method="POST" id="miFormulario" class="form-group">
       <div id="errores" display="none" class="errores ">
  <?php include("errores.php"); ?>
       </div>



<div class=" col-xs-12 col-md-6 center" >
  <legend>Datos de la Cuenta</legend>
  <div ><label for="fecha">Email: </label><input type="email"
  class="form-control" name="correoElectronico" placeholder="mama@email.com" id="email"  required onblur="checkTextField(this);" value="
  <?php if ($auth->estaLogueado()) {
  	$usuario = $repoUsuarios->traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);
  echo $usuario->getEmail();
  }?>


"


  ></div>

         <legend>Datos de la Comida</legend>

           <div class="">
             <label for="fecha">Presione el bóton para fecha de </label>
             <a onclick="dateNow(test2)" href="#" style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)" class="btn btn-outline-default btn-default ">HOY</a>
  <input id="test2" type="text"    value="2016-02-28" name="fecha" required/>
           </div>

           <div class="">
             <label for="hora">Presione el botón para la hora</label>
             <a onclick="timeNow(test1)" href="#" style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)" class="btn btn-outline-default btn-default ">AHORA
             </a>
  <input id="test1" type="time" value="hh:mm" name="hora" required/>
           </div>
<div>
           <label for="pecho_izquierdo">Pecho Izquierdo (minutos)</label>
         <input type="number"
         class="form-control" name="pecho_izquierdo" placeholder="minutos" id="pecho_izquierdo" maxlength="2"  min="0" max="60" onblur="sumarPechos();"></div>
         <label for="pecho_derecho">Pecho Derecho (minutos)</label>
       <input type="number"
       class="form-control" name="pecho_derecho" min="0" max="60" placeholder="minutos" id="pecho_derecho" maxlength="2"  onblur="sumarPechos();"></span>

     </span>

<label for="total">Total (minutos) se calcula solo)</label>
<input type="number" class="form-control "  name="total" placeholder="minutos" value="" id="total" maxlength="2"   ></div>
<div class="col-xs-12 col-md-6 center">
  <legend>Complemento - Biberón(mamadera)</legend>
  <input type="button" class="btn btn-success" name="comp_si" value="Si" id="comp_si" onclick="mostrar('complemento'); return false;">
 <input type="button" name="comp_no" value="No" class="btn btn-danger" onclick="ocultar('complemento'); return false;">

  <div class="complemento" style="display: none;" id="complemento">

  <label for="">Leche Maternizada (cm3):</label>
  <input type="number"
  class="form-control" name="lech_mat" placeholder="100" id="lech_mat" maxlength="3"  onblur="checkTextField(this);"></span>

  <label for="">Leche Materna (cm3):</label>
  <input type="number"
  class="form-control" name="lech_madre" placeholder="100" id="lech_madre" maxlength="3"  onblur="checkTextField(this);"></span>
  </div>

</div>


<div class="col-xs-12 col-md-6 center">
<legend>Pezoneras</legend>

<Label>Izquierda</Label>
<span class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="pez_izq"
           id="exampleRadios1" value="si" >
     Sí
  </label>
</span>
<span class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="pez_izq"
           id="exampleRadios3" value="no" checked>
    No
  </label>
</span>
</div>
<div class="">

  <Label>Derecha</Label>

<span class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="pez_der"
           id="exampleRadios1" value="si" >
     Sí
  </label>
</span>
<span class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="pez_der"
           id="exampleRadios3" value="no" checked>
    No
  </label>
</span>
</div>


                  <div class="col-xs-12 center" style="padding-top:20px">

                      <input  class='btn  btn-md'id="enviar"  type="submit" method="post"   value="ENVIAR"style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)" ></button>

                    <input  type="reset"  class='btn  btn-md' style="text-decoration:none;background-color:rgba(156, 39, 176, 0.6);color:rgba(255,255,255,0.7)"value="BORRAR"></button>
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
<script src="js/contador.js" />

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

function sumarPechos() {
var der =document.getElementById('pecho_derecho').value;
var izq =document.getElementById('pecho_izquierdo').value;
var total =document.getElementById('total');

total.value = Number(der)+Number(izq);

}
function mostrar(id) {
    document.getElementById(id).style.display = 'block';
}
function ocultar(id) {
    document.getElementById(id).style.display = 'none';
    document.getElementById('lech_mat').value = "";
    document.getElementById('lech_madre').value = "";
}


</script>
<script src="js/form_verify.js"></script>


</body>

</html>
