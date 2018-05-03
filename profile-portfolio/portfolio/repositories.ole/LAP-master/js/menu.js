
var but_news = document.getElementById('but_news');
var but_media = document.getElementById('but_media');
var but_profiles = document.getElementById('but_profiles');
var but_contact = document.getElementById('but_contact');
var but_projects = document.getElementById('but_projects');

var view0 = document.getElementById('view0');
var view2 = document.getElementById('view2');
var view1 = document.getElementById('view1');
var view3 = document.getElementById('view3');
var view4 = document.getElementById('view4');
var view5 = document.getElementById('view5');


var caja0  = document.getElementById('caja0');
var caja1_1  = document.getElementById('caja1_1');
var caja1_2 = document.getElementById('caja1_2');
var caja2_1 = document.getElementById('caja2_1');
var caja2_2 = document.getElementById('caja2_2');
var caja2_3 = document.getElementById('caja2_3');
var caja2_4 = document.getElementById('caja2_4');
var caja2_5 = document.getElementById('caja2_5');
var caja2_6 = document.getElementById('caja2_6');
var caja3_1 = document.getElementById('caja3_1');
var caja3_2 = document.getElementById('caja3_2');
var caja3_3 = document.getElementById('caja3_3');
var caja3_4 = document.getElementById('caja3_4');
var caja3_5 = document.getElementById('caja3_5');
var caja3_6 = document.getElementById('caja3_6');
var caja3_7 = document.getElementById('caja3_7');
var caja5_1 = document.getElementById('caja5_1');
var caja5_2 = document.getElementById('caja5_2');
var caja5_3 = document.getElementById('caja5_3');
var caja5_4 = document.getElementById('caja5_4');
var caja5_5 = document.getElementById('caja5_5');
var caja5_6 = document.getElementById('caja5_6');

function ocultar_todos(){
view0.style.display = "none";
view1.style.display = "none";
view2.style.display = "none";
view3.style.display = "none";
view4.style.display = "none";
view5.style.display = "none";
caja0.style.display = "none";
caja1_1.style.display = "none";
caja1_2.style.display = "none";
caja2_1.style.display = "none";
caja2_2.style.display = "none";
caja2_3.style.display = "none";
caja2_4.style.display = "none";
caja2_5.style.display = "none";
caja2_6.style.display = "none";
caja3_1.style.display = "none";
caja3_2.style.display = "none";
caja3_3.style.display = "none";
caja3_4.style.display = "none";
caja3_5.style.display = "none";
caja3_6.style.display = "none";
caja3_7.style.display = "none";
caja5_1.style.display = "none";
caja5_2.style.display = "none";
caja5_3.style.display = "none";
caja5_4.style.display = "none";
caja5_5.style.display = "none";
caja5_6.style.display = "none";
}

function ocultar_todos_content(){
caja0.style.display = "none";
caja1_1.style.display = "none";
caja1_2.style.display = "none";
caja2_1.style.display = "none";
caja2_2.style.display = "none";
caja2_3.style.display = "none";
caja2_4.style.display = "none";
caja2_5.style.display = "none";
caja2_6.style.display = "none";
caja3_1.style.display = "none";
caja3_2.style.display = "none";
caja3_3.style.display = "none";
caja3_4.style.display = "none";
caja3_5.style.display = "none";
caja3_6.style.display = "none";
caja3_7.style.display = "none";
caja5_1.style.display = "none";
caja5_2.style.display = "none";
caja5_3.style.display = "none";
caja5_4.style.display = "none";
caja5_5.style.display = "none";
caja5_6.style.display = "none";
}

function showdiv(input) {
  ocultar_todos();
  input.style.display = "block";
  input.style.opacity = 1;
}

function showcontent(input) {
  ocultar_todos_content();
  input.style.display = "block";
  input.style.opacity = 1;
}

function home() {
  ocultar_todos();
  view0.style.display = "block";
  caja0.style.display = "block";

}
