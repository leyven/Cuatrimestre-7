$(document).ready(function(){


esconder();

$(".show").click(function(evnt){
		$("#edicion").show(1000);

	   
    	
	

});
$(".info").click(function(evnt){

	    $variable=$(this).attr("data-nombre");
	    
		$("#CNombre").val($variable);
	    $variable=$(this).attr("data-descripcion"); 
	    $("#CDescripcion").val($variable);
	    $variable=$(this).attr("data-solucion");
	    $("#CSolucion").val($variable);
	    $variable=$(this).attr("data-idcategoria");
	    $("#CCategoria").val($variable);

	    
	    $variable=$(this).attr("data-idcatalogo");
	    alert($variable);
	    $("#getval").val($variable);
	    $variable=$(this).attr("data-termino");
	    $("#Ctermino").val($variable);
	    $variable=$(this).attr("data-descripcion");
	    $("#Cdescripcion").html($variable);
});

});

function esconder(){
  $("#edicion").hide();
  
}