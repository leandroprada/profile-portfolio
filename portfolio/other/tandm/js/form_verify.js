
var message="Este campo no está completado correctamente";
var errores= document.getElementById("errores");
function checkTextField(campo) {

  if (campo.value == "") {

             document.getElementById('errores').innerHTML=
             "El campo "+campo.name+" está vacío, por favor complételo.";
        }


  }

  var pass = document.getElementById("pass");
    var pass2 = document.getElementById("pass2");
  function comprobarPass(){
      if (pass.value !== pass2.value)

      {
    alert ("las contraseñas no coinciden");

      }
    }


var formulario = document.getElementById("miFormulario");


formulario.addEventListener("submit",
  registrar);
  function registrar(){
    function apagar(e){
      e.preventDefault();}
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","https://sprint.digitalhouse.com/nuevoUsuario",true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function(){
      if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
        console.log("registro exito");
      }
    }


    // var ajaxPedido = new XMLHttpRequest();
    // ajaxPedido.open("GET","https://sprint.digitalhouse.com/getUsuarios",true);
    // ajaxPedido.send();
    // ajaxPedido.onreadystatechange = function(){
    //   if(ajaxPedido.readyState == 4 && ajaxPedido.status == 200){
    //     var responseJSON = ajaxPedido.responseText;
    //     var response = JSON.parse(responseJSON);
    // alert("Usted es el usuario número "+ response.cantidad);
    //
    //

    //

    }
  }
  }
