window.addEventListener("load",function() {

   var cuerpo=document.getElementById("cuerpo");
   var puerta1 = document.getElementById("newswires");
   var puerta2 = document.getElementById("mediaBuzz");
   var puerta3 = document.getElementById("profiles");
   var puerta4 = document.getElementById("cv");
   var puerta5 = document.getElementById("contact");
   var puerta6 = document.getElementById("fullsite");

   var caja1 =document.getElementById("caja1");
   var caja2 =document.getElementById("caja2");
   var caja3 =document.getElementById("caja3");
   var caja4 =document.getElementById("caja4");
   var caja5 =document.getElementById("caja5");
   var caja6 =document.getElementById("caja6");

   var bg1 = document.getElementById("bg1");
   var bg2 = document.getElementById("bg2");
   var bg3 = document.getElementById("bg3");
   var bg4 = document.getElementById("bg4");
   var bg5 = document.getElementById("bg5");
   var bg6 = document.getElementById("bg6");
   var cuerpoNoHint = document.getElementById("bg");

var showHints =document.getElementById("showHints")
var hints = document.getElementById("hints");
var hintDiv1 = document.getElementById("hint1");
 var hintDiv1 = document.getElementById("hint1");
 var hintDiv2 = document.getElementById("hint2");
 var hintDiv3 = document.getElementById("hint3");
 var hintDiv4 = document.getElementById("hint4");
 var hintDiv5 = document.getElementById("hint5");
 var hintDiv6 = document.getElementById("hint6");

var hide6 = document.getElementById("hide6");
var hideWindows = document.getElementById("hideWindows");
showHints.onclick= function mostrarHints() {
  hints.style.display = "block";
function mostrarHint1(){ hintDiv1.style.display="block"; } function
myFunction1() { myVar = setTimeout(mostrarHint1, 500); } myFunction1();
function mostrarHint2(){ hintDiv2.style.display="block"; } function
myFunction2() { myVar = setTimeout(mostrarHint2, 750); } myFunction2();
function mostrarHint3(){ hintDiv3.style.display="block"; } function
myFunction3() { myVar = setTimeout(mostrarHint3, 900); } myFunction3();
function mostrarHint4(){ hintDiv4.style.display="block"; } function
myFunction4() { myVar = setTimeout(mostrarHint4, 1050); } myFunction4();
function mostrarHint5(){ hintDiv5.style.display="block"; } function
myFunction5() { myVar = setTimeout(mostrarHint5, 1200); } myFunction5();
function mostrarHint6(){ hintDiv6.style.display="block"; } function
myFunction6() { myVar = setTimeout(mostrarHint6, 1350); } myFunction6();
}

hintDiv1.onmouseover= function () { bg1.style.display = "block"; }
hintDiv1.onmouseout = function () { bg1.style.display = "none"; }

hintDiv2.onmouseover= function () { bg2.style.display = "block"; }
hintDiv2.onmouseout = function () { bg2.style.display = "none"; }

hintDiv3.onmouseover= function () { bg3.style.display = "block"; }
hintDiv3.onmouseout = function () { bg3.style.display = "none"; }

hintDiv4.onmouseover= function () { bg4.style.display = "block"; }
hintDiv4.onmouseout = function () { bg4.style.display = "none"; }

hintDiv5.onmouseover= function () { bg5.style.display = "block"; }
hintDiv5.onmouseout = function () { bg5.style.display = "none"; }

hintDiv6.onmouseover= function () { bg6.style.display = "block"; }
hintDiv6.onmouseout = function () { bg6.style.display = "none"; }

hide6.onclick = function() { hints.style.display = "none";hintDiv1.style.display="none";hintDiv2.style.display="none";hintDiv3.style.display="none";hintDiv4.style.display="none";hintDiv5.style.display="none";hintDiv6.style.display="none";hintDiv7.style.display="none";
}

hideWindows.onclick = function hideAll() { caja1.style.display = "none";caja2.style.display = "none";
caja3.style.display = "none"; caja4.style.display = "none"; caja5.style.display =
"none"; caja6.style.display = "none";
}
   cuerpo.onclick = function hideAll() { caja1.style.display = "none";caja2.style.display = "none";
caja3.style.display = "none"; caja4.style.display = "none"; caja5.style.display =
"none"; caja6.style.display = "none";
   }




  puerta1.onclick = function() {
    caja1.style.display = "block";
  }
  caja1.onclick = function() {
    caja1.style.display = "none";
  }


puerta2.onclick = function() {
  caja2.style.display = "block";
}
caja2.onclick = function() {
  caja2.style.display = "none";
}


puerta3.onclick = function() {
   caja3.style.display = "block";
}

caja3.onclick = function() {
 caja3.style.display = "none";
}

puerta4.onclick = function() {
  caja4.style.display = "block";
}

caja4.onclick = function() {
  caja4.style.display = "none";
}



puerta5.onclick = function() {
  caja5.style.display = "block";
}
caja5.onclick = function() {
  caja5.style.display = "none";
}


puerta6.onclick = function() {
  caja6.style.display = "block";
}
caja6.onclick = function() {
caja6.style.display = "none";
}

hint.addEventListener ("click", function() {
if (cuerpoHint.style.display ="none"){
cuerpoHint.style.display ="block";
cuerpoNoHint.style.display ="none";
}

})

hide.addEventListener ("click", function() {
if (cuerpoNoHint.style.display ="block"){
cuerpoHint.style.display ="none";
cuerpoNoHint.style.display ="block";
}
})

})
