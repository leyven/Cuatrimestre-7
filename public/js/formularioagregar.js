$(document).ready(function(){


esconder();

$("#mostrarnoticia").click(function(evnt){
  esconder();
    $("#noticias").show(1000);
});

$("#mostrarpuestos").click(function(evnt){
esconder();
  $("#puestos").show(1000);
});

$("#mostrarprogramas").click(function(evnt){
esconder();
$("#programas").hide();
  $("#programas").show(1000);
});

$("#mostrareventos").click(function(evnt){
esconder();

});

$("#mostrareventos").click(function(evnt){
esconder();
 $("#eventos").show(1000);
});





});

function esconder(){
  $("#noticias").hide();
  $("#puestos").hide();
  $("#programas").hide();
  $("#eventos").hide();
  $("#productos").hide();
}