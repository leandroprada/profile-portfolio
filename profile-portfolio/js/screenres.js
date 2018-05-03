window.addEventListener("load",function() {




var res_below_tablet = document.getElementById('res_below_tablet');
var res_desktop = document.getElementById('res_desktop');
// function mostrardiv(div){ div.style.display="block"; }
if(screen.width >= 960)
   {
     console.log("estamos a mas de 960");
      res_desktop.style.display = "block";

   }
   else

  {
    console.log("estamos a menos de 960");
      res_below_tablet.style.display = "block";


  }

}
)
