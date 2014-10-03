<?php 
class CatalogoController extends BaseController {
    	public function mostrarCatalogo(){
			try{
			$categoria = DB::table('categoria')->get();
			$catalogo = DB::table('catalogo_ayuda')->get();
			$catalogocat1 = DB::table('catalogo_ayuda')->where('idCategoria','=',1)->get();
			$catalogocat2 = DB::table('catalogo_ayuda')->where('idCategoria','=',2)->get();
			$catalogocat3 = DB::table('catalogo_ayuda')->where('idCategoria','=',3)->get();
			$catalogocat4 = DB::table('catalogo_ayuda')->where('idCategoria','=',4)->get();
			$catalogocat5 = DB::table('catalogo_ayuda')->where('idCategoria','=',5)->get();
			}catch(ErrorException $e){}
			
			return View::make('catalogo_ayuda')->with('catalogo', $catalogo)->with('categoria', $categoria)->with('catalogocat1',$catalogocat1)
			->with('catalogocat2',$catalogocat2)->with('catalogocat3',$catalogocat3)->with('catalogocat4',$catalogocat4)->with('catalogocat5',$catalogocat5);
		
			
		}
 
}
?>