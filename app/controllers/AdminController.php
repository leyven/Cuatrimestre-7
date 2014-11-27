<?php 


class AdminController extends BaseController{

public function eliminar(){
	try{
	$target= $_POST["eliminar"];
	DB::table('actividad')->where('id_Actividad', '=', $target)->delete();
	 return Redirect::to('admin');
	}
	catch(ErrorException $e){return Redirect::to('admin');
			}
}


	public function editar(){
				$decision= $_POST["type"];
				if ($decision=="editar"){


		$folio= $_POST["folio"];
		$actividad= $_POST["actividad"];
		$idUsuario= $_POST["idUsuario"];
		$idActividad= $_POST["idActividad"];
		$inicio= $_POST["inicio"];
		$termino= $_POST["termino"];
		$Descripcion= $_POST["Descripcion"];
		
		
		$mensaje1='datos almacenados';
		$error='datos incorrectos';


	$data = Input::all();
	//reglas de validacion
	$reglas=$array = array('folio' => 'required', 
						   'actividad'=>'required',
						   'idUsuario'=>'required',
						   'idActividad'=>'required',						   
						   'inicio'=>'date|required',
						   'termino'=>'date|required',
						   'Descripcion'=>'required'

						   );
	// Crear instancia del validador.
 	$validador = Validator::make($data, $reglas);

 	 if($validador->passes()) {
 	 	try{
		 $bd = DB::table('actividad')
            ->where('id_Actividad', $idActividad)
            ->update(array('folio' => $folio,
            'nombre_Actividad' => $actividad,
            'id_Usuario' => $idUsuario,
            'id_Actividad' => $idActividad,
          'fecha_inicio' => $inicio,
           'fecha_termino' => $termino,
            'descripcion' => $Descripcion));

			
		return Redirect::to('admin')->with('mensaje', $mensaje1);
		}
		
		catch(ErrorException $e){
			return View::make('admin')->with('mensaje', $error);
		}
 	 }
 	 return Redirect::to('admin')->withErrors($validador);

			

	}
	else{
		return $this->eliminar();
	}
	}

}


?>