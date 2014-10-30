<?php 


class RequerimientoController extends BaseController{
public function mostrar(){

		try{
				$var = DB::table('actividad')-> get();
		}
		catch(ErrorException $e){

		}
		return View::make('CatalogoAyuda')->with('var', $var);
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
		

	$data = Input::all();
	//reglas de validacion
	$reglas=$array = array('Folio' => 'alpha_num|required', 
						   'Prioridad'=>'alpha_num|required',
						   'Nombre'=>'alpha_num|required',
						   'fecha_captura'=>'date|required',						   
						   'Descripcion'=>'alpha_num|required',
						   'Capturista'=>'alpha_num|required'
						   );
	// Crear instancia del validador.
 	$validador = Validator::make($data, $reglas);

 	 if($validador->passes()) {
 // Normalmente haríamos algo con los datos.

		 $id = DB::table('requerimientos')->insertGetId(array(
			'Folio'=>$folio,
			'Prioridad'=>$prioridad,
			'Nombre'=>$nombre,
			'fecha_Captura'=>$fechacap,
			'hora_Captura'=>$horacap,
			'Descripcion'=>$descripcion,
			'Capturista'=>$capturista));
			
		return Redirect::to('registro_requerimientos')->with('mensaje', $mensaje1);
 	}
 	 		
return Redirect::to('registro_requerimientos')->withErrors($validador);
	

		
		
	
	}
	
}


?>