<?php 
class CatalogoController extends BaseController {
    	public function mostrarCatalogo(){
			try{
			$categoria = DB::table('categoria')->get();
			$catalogo = DB::table('catalogo_ayuda')->get();
						
			}catch(ErrorException $e){}
			
			return View::make('catalogo_ayuda')->with('catalogo', $catalogo)->with('categoria', $categoria);
		
			
		}
 
}
?>