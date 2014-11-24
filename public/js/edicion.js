$(document).ready(function(){
   
   $('.content').click(function(evnt) {
	    $variable=$(this).attr("data-contenido");
		$('textarea').html($variable);
	    $variable=$(this).attr("data-titulo"); 
	    $("#titleContent").val($variable);
	    $variable=$(this).attr("data-imagen");
	    $("#imgContent").attr("src",$variable);
	    $variable=$(this).attr("data-id");
	    $("#get-id").val($variable);
	   
    	
	});






});