<?php 
class RequerimientosController extends BaseController {
    	public function mostrarRequerimientos(){
			try{
			$req1 = DB::table('requerimientos')->where('Departamento','=','Recursos Financieros')->get();
			$req2 = DB::table('requerimientos')->where('Departamento','=','Recursos Humanos')->get();
			$req3 = DB::table('requerimientos')->where('Departamento','=','Administracion')->get();
			$req4 = DB::table('requerimientos')->where('Departamento','=','Gerencia')->get();
			$req5 = DB::table('requerimientos')->where('Departamento','=','Compras')->get();
			
			
			
			}catch(ErrorException $e){}
			
			
			
			
			return View::make('requerimientos')->with('req1', $req1)->with('req2', $req2)->with('req3', $req3)->with('req4', $req4)->with('req5', $req5);
		
			
		}
		
public function mostrarRequerimientos2(){
			try{
			$reqt = DB::table('requerimientos')->get();
			}catch(ErrorException $e){}
			
			
			
			
			return View::make('requerimientos2')->with('reqt', $reqt);
		
			
		}
 
 
 
}
?>