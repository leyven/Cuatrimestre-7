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

	public function registro(){
			
		$Actividad= $_POST["Actividad"];
		$descripcion= $_POST["Descripcion"];
		$departamento= $_POST["Departamento"];
		$requerimiento= $_POST["Requerimiento"];
		$encargado= $_POST["Encargado"];
		$fechaini= $_POST["fecha_inicio"];
		$horaini= $_POST["hora_inicio"];
		$fechaest= $_POST["fecha_estimada"];
		$fechater= $_POST["fecha_termino"];
		$horater= $_POST["hora_termino"];
		
		$mensaje1='datos almacenados';
		$error='datos incorrectos';
		try{
		 $bd = DB::table('actividad')->insertGetId(array(
			'nombre_Actividad'=>$Actividad,
			'Encargado'=>$encargado,
			'Requerimiento'=>$requerimiento,
			'Departamento'=>$departamento,
			'fecha_Inicio'=>$fechaini,
			'hora_Inicio'=>$horaini,
			'fecha_Estimada'=>$fechaest,
			'fecha_Termino'=>$fechater,
			'hora_Termino'=>$horater,
			'descripcion'=>$descripcion));
			
		return Redirect::to('registro_actividades')->with('mensaje', $mensaje1);
		}
		
		catch(ErrorException $e){
			return View::make('registro_actividades')->with('mensaje', $error);
		}	

	}
	
}


?>