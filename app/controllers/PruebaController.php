<?php 


class actividadController extends BaseController{
	public function mostrar(){

		try{
				$var = DB::table('actividad')-> get();
		}
		catch(ErrorException $e){

		}

		return View::make('actividades')->with('var', $var);

	}
	
}


?>