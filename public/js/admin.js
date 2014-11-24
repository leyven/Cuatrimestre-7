$(document).ready(function(){


esconder();

$(".mostrar").click(function(evnt){
		$("#edicion").show(1000);

	   
    	
	

});
$(".info").click(function(evnt){

	    $variable=$(this).attr("data-folio");
	    
		$("#Cfolio").val($variable);
	    $variable=$(this).attr("data-actividad"); 
	    $("#Cactividad").val($variable);
	    $variable=$(this).attr("data-iduser");
	    $("#CidUsuario").val($variable);
	    $variable=$(this).attr("data-idactividad");
	    $("#CidActividad").val($variable);
	    $variable=$(this).attr("data-inicio");
	    $("#Cinicio").val($variable);
	    $variable=$(this).attr("data-termino");
	    $("#Ctermino").val($variable);
	    $variable=$(this).attr("data-descripcion");
	    $("#Cdescripcion").html($variable);
});

});

function esconder(){
  $("#edicion").hide();
  
}