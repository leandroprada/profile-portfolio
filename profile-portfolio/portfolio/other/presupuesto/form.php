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
// var_dump($_POST);exit;
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
            $_POST['fecha'],
              $_POST['descripcion'],
              $_POST['ingreso'],
              $_POST['egreso']
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
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/styles.css">
  <title>Nuevo Gasto - LAP</title>



</head>
<body  id="page-top" >

  <?php    require_once ("navbar.php") ?>


<div class='container-fluid registro'  >

<div class="row">



<div class="">

          <form
       action="" method="POST" id="miFormulario" class=" ">
       <div id="errores" display="none" class="errores ">
  <?php include("errores.php"); ?>
       </div>

<div class=" center col-xs-12 col-md-6 col-md-offset-3 " >
  <legend>Nuevo gasto</legend>

<div class="">
             <label for="fecha">Presione el bóton para fecha de </label>
             <a onclick="dateNow(test2)" href="#" style="text-decoration:none" class="btn btn-outline-default btn-default ">HOY</a>
  <input id="test2" type="text"    value="2016-02-28" name="fecha" required/>
           </div>
    <label for="medio">Medio De Pago</label>
<select class="form-control" name="medio" id="medioPago" >
  <option value=0>Seleccione una categoría</option>
  <option value=1>Efectivo</option>
      <option value=2>Credito</option>
      <option value=3>Debito</option>
      
</select>


           <div class="" >
             <label for="descripcion">Descripcion</label>
<select class="form-control" name="rubro" id="rubro" >
  <option value=0>Seleccione una categoría</option>
  <option value=1>Trini</option>
      <option value=2>Tarjeta</option>
      <option value=3>Coghlan</option>
      <option value=4>Josi</option>
      <option value=5>Sube</option>
      <option value=6>Varios</option>

 <option value=7>Certius</option>
 <option value=8>Ivan</option>

</select>

  <select class="form-control" style="display:none" name="rubro_tarjeta" id="rubro_tarjeta"  >
    <option value=0>Seleccione una categoría</option>
    <option value=1>Amex</option>
        <option value=2>Visa</option>
        <option value=3>Otro</option>
        </select>
  <select class="form-control" style="display:none" name="rubro_trini" id="rubro_trini" >
    <option value=0>Seleccione una categoría</option>
    <option value=1>Colegio</option>
        <option value=2>Comedor</option>
        <option value=3>Ropa</option>
        <option value=4>Otros</option>
        </select>
  <select class="form-control" style="display:none" name="rubro_coghlan" id="rubro_coghlan" >
    <option value=0>Seleccione una categoría</option>
    <option value=1>Alquiler</option>
        <option value=2>Expensas</option>
        <option value=3>Edenor</option>
        <option value=4>Metrogas</option>
        <option value=5>Aysa</option>
        <option value=6>ABL</option>
        <option value=7>Telecom</option>
        <option value=8>Personal</option>
        <option value=9>Claro</option>
        <option value=10>Desayuno</option>
        <option value=11>Almuerzo</option>
        <option value=11>Cena</option>
        <option value=11>Supermercado</option>
        <option value=11>Otros</option>
        </select>
  <select class="form-control" style="display:none" name="rubro_varios" id="rubro_varios" >
    <option value=0>Seleccione una categoría</option>
    <option value=1>PFBG</option>
        <option value=2>PFBS</option>
        <option value=3>Otros</option>

        </select>

  <input id="descripcion_opcional" type="text" placeholder="Ingrese su descripcion opcional" name="descripcion_opcional"class="form-control" />

  <input id="descripcion" type="text"  name="descripcion" class="form-control" placeholder="Este campo se calcula solo" onfocus="completar()"/>
           </div>
<div>
       <label for="ingreso">Ingresos</label>
         <input type="number" class="form-control" name="ingreso" placeholder="Ingrese el monto con coma de corresponder" id="ingreso" step="0.01" onfocus="completar()" /></div>



<div>
       <label for="egreso">Gastos</label>
         <input type="number" class="form-control" name="egreso" placeholder="Ingrese el monto con coma de corresponder" id="egreso" step="0.01" onfocus="completar()" /></div>


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
                  <p>Copyright &copy; LAP 2016</p>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/form_verify.js"></script>
<script src="js/form_interactivo.js"></script>


</body>

</html>
