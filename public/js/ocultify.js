$(document).ready(function(){


esconder();

$(".1").click(function(evnt){
esconder();
$("#category1").show(1000);
});

$(".2").click(function(evnt){
esconder();
 $("#category2").show(1000);
});

$(".3").click(function(evnt){
esconder();
$("#category3").show(1000);
});

$(".4").click(function(evnt){
esconder();
$("#category4").show(1000);
});

$(".5").click(function(evnt){
esconder();
 $("#category5").show(1000);
});
});


function toggle(elemento) {
          if(elemento.value=="Recursos Financieros") {
              document.getElementById("depto1").style.display = "block";
           }else{
               if(elemento.value=="Recursos Humanos") {
              document.getElementById("depto2").style.display = "block";
               }else{
                   if(elemento.value=="Administracion") {
					document.getElementById("depto3").style.display = "block";
                    }else{
						if(elemento.value=="Gerencia") {
						document.getElementById("depto4").style.display = "block";
                    } else{
						if(elemento.value=="Compras") {
						document.getElementById("depto5").style.display = "block";
						}   
					}
				}
			}
		}
}



function esconder(){
  $("#category1").hide();
  $("#category2").hide();
  $("#category3").hide();
  $("#category4").hide();
  $("#category5").hide();
  
  $("#depto1").hide();
  $("#depto2").hide();
  $("#depto3").hide();
  $("#depto4").hide();
  $("#depto5").hide();

  
}


