<?php 


class requerimientoController extends BaseController{
public function mostrar(){

		try{
				$var = DB::table('actividad')-> get();
		}
		catch(ErrorException $e){

		}
		return View::make('actividades')->with('var', $var);
	}

		public function registro_requerimientos(){
		$folio= $_POST["Folio"];
		$prioridad= $_POST["Prioridad"];
		$nombre= $_POST["Nombre"];
		$fechacap= $_POST["fecha_captura"];
		$horacap= $_POST["hora_captura"];
		$descripcion= $_POST["Descripcion"];
		$capturista= $_POST["Capturista"];
		
		$mensaje1='datos almacenados';
		$error='datos incorrectos';
		try{
		 $bd = DB::table('requerimientos')->insertGetId(array(
			'Folio'=>$folio,
			'Prioridad'=>$prioridad,
			'Nombre'=>$nombre,
			'fecha_Captura'=>$fechacap,
			'hora_Captura'=>$horacap,
			'Descripcion'=>$descripcion,
			'Capturista'=>$capturista));
			
		return Redirect::to('registro_requerimientos')->with('mensaje', $mensaje1);
		}
		
		catch(ErrorException $e){
			return View::make('registro_requerimientos')->with('mensaje', $error);
		}	

	}
	
}


?>