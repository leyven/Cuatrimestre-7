<?php 
class RequerimientosController extends BaseController {
    	public function mostrarRequerimientos(){
			try{
			$req1 = DB::table('requerimientos')->get();
			
			}catch(ErrorException $e){}
			
			return View::make('requerimientos')->with('req1', $req1);
		
			
		}
 
}
?>