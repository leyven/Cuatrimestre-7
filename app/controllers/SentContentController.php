<?php  

/**
* 
*/
class SentContentController extends BaseController
{

	public function getProductos(){
		
		$productos=DB::table('catalogo_ayuda')->get();
		$var="hola";
 return View::make('inicio')->with('arreglo', $productos);
		
	}
}
?>