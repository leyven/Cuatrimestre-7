<?php 
class actividadController extends BaseController{
	public function mostrarPersonal(){

		try{
				$var = DB::table('personal')-> get();
		}
		catch(ErrorException $e){

		}
		return View::make('Personal')->with('var', $var);
	}
	}
	?>