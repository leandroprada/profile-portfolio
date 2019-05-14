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

document.getElementById("rubro").addEventListener("change", elegirSegundoSelect, true);

function elegirSegundoSelect(){
valorDeSelect1= document.getElementById("rubro").selectedIndex
tarjeta =document.getElementById("rubro_tarjeta");
trini =document.getElementById("rubro_trini");
coghlan = document.getElementById("rubro_coghlan");
varios = document.getElementById("rubro_varios");

  if (valorDeSelect1==1) {
    trini.style.display = "block";
   tarjeta.style.display = "none";
   coghlan.style.display = "none";
   varios.style.display = "none";
   }
if (valorDeSelect1==2) {
  tarjeta.style.display = "block";
  trini.style.display = "none";
  coghlan.style.display = "none";
  varios.style.display = "none";
}
if (valorDeSelect1==3) {
  trini.style.display = "none";
 tarjeta.style.display = "none";
 coghlan.style.display = "block";
 varios.style.display = "none";
 }
if (valorDeSelect1==4) {
  tarjeta.style.display = "none";
  trini.style.display = "none";
  coghlan.style.display = "none";
  varios.style.display = "none";
  }
if (valorDeSelect1==5) {
  trini.style.display = "none";
 tarjeta.style.display = "none";
 coghlan.style.display = "none";
 varios.style.display = "none";
 }
if (valorDeSelect1==6) {
  tarjeta.style.display = "none";
  trini.style.display = "none";
  coghlan.style.display = "none";
  varios.style.display = "block";
  }



}


function completar(){
//selectores de DOM
  medioPago = document.getElementById("medioPago");
  rubro = document.getElementById("rubro");
  descripcion = document.getElementById("descripcion");
  tarjeta = document.getElementById("rubro_tarjeta");
  trini = document.getElementById("rubro_trini");
  coghlan = document.getElementById("rubro_coghlan");
  varios = document.getElementById("rubro_varios");
  descripcionOpcional = document.getElementById("descripcion_opcional");
  textoDescripcionOpcional = descripcionOpcional.value;
//ifs para llenar los campos con vacio o algo

if (medioPago.selectedIndex !==0) {
    textoMedio = medioPago.options[medioPago.selectedIndex].text
 }
else {textoMedio = ""}

if (rubro.selectedIndex !==0) {
    textoRubro= rubro.options[rubro.selectedIndex].text
  }
  else {textoRubro = ""}
if (tarjeta.selectedIndex !==0) {
  textoTarjeta = tarjeta.options[tarjeta.selectedIndex].text
  }
  else {textoTarjeta = ""}
if (trini.selectedIndex !==0) {
  textoTrini = trini.options[trini.selectedIndex].text
  }
  else {textoTrini = ""}
if (coghlan.selectedIndex !==0) {
  textoCoghlan =  coghlan.options[coghlan.selectedIndex].text}
  else {textoCoghlan = ""}
if (varios.selectedIndex !==0) {
  textoVarios =varios.options[varios.selectedIndex].text
  }
  else {textoVarios = ""}

//trims de los campos

  tm = textoMedio.trim();
  tr = textoRubro.trim();
  tt = textoTarjeta.trim();
  tc = textoCoghlan.trim();
  ti = textoTrini.trim();
  tv = textoVarios.trim();
  to = textoDescripcionOpcional.trim();

//damos valor a la descripcion;

  var desc = tm+" - "+ tr+" - "+tt+" "+tc+" "+ti+" "+tv+"-"+to;
  var descripcionSinGuiones =desc.replace("  ", "")
descripcion.value = descripcionSinGuiones;
// function valoresDeDesc() {
// if  ((tr !== "") AND (to !== ""))
// {return tm+" -"+ tr+" "+tt+" "+to;}
// else if   ((tr !== "") AND (tc !== ""))
// {return tm+" -"+tr+" "+tc+" "+to;}
// else if   ((tr !== "") AND (ti !== ""))
// {return tm+" -"+tr+" "+ti+" "+to;}
// else if   ((tr !== "") AND (tv !== ""))
// {return tm+" -"+tr+" "+tv+" "+to;}





}
