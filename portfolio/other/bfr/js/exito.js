function exito(){



  var ajaxPedido = new XMLHttpRequest();
  ajaxPedido.open("GET","https://sprint.digitalhouse.com/getUsuarios",true);
  ajaxPedido.send();
  ajaxPedido.onreadystatechange = function(){
    if(ajaxPedido.readyState == 4 && ajaxPedido.status == 200){
      var responseJSON = ajaxPedido.responseText;
      var response = JSON.parse(responseJSON);

      var exito= document.getElementById("exito");
      exito.innerHTML="Usted es el usuario registrado número "+ response.cantidad+ " ¡Gracias por registrarse!";
  // alert("Usted es el usuario número "+ response.cantidad);



  //

  }
}
}

exito();
