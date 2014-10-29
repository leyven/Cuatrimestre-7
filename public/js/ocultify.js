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

function esconder(){
  $("#category1").hide();
  $("#category2").hide();
  $("#category3").hide();
  $("#category4").hide();
  $("#category5").hide();
}