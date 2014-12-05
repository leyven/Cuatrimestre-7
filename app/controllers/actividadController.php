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
public function mostrarAdmin(){

		try{
				$var = DB::table('actividad')-> get();
		}
		catch(ErrorException $e){

		}
		// variable por notificaciones
		$contador=0;
		$array[0]="hola";
		$date = date('Y-m-d');
		$date2 =date('Y-m-d',(strtotime ( '-2 day' , strtotime ( $date) ) ));
		$date3 =date('Y-m-d',(strtotime ( '+1 day' , strtotime ( $date) ) ));
		echo "The current server timezone is: " . $date2."<br>";
		foreach ($var as $key) {
			$flag=$key -> fecha_Termino;
			if($flag>=$date2){
				$array[$contador]=$flag;
			}
			
			$contador=$contador+1;
		}

		foreach ($array as $key) {
			$notificaciones = DB::table('actividad')
                    ->where('fecha_Termino', '>=', $date2)
                    ->where('fecha_Termino', '<', $date3)                   
                    ->get();
		}
		

		///**termino las notificaciones

		
		return View::make('Admin')->with('var', $var)->with('notificaciones', $notificaciones);
	}

public function elimsinar(){
	try{
	$target= $_POST["eliminar"];
	DB::table('actividad')->where('id_Actividad', '=', $target)->delete();
	 return Redirect::to('admin');
	}
	catch(ErrorException $e){return Redirect::to('admin');
			}
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


	$data = Input::all();
	//reglas de validacion
	$reglas=$array = array('Actividad' => 'required', 
						   'Descripcion'=>'required',
						   'Departamento'=>'required',
						   'Requerimiento'=>'required',						   
						   'Encargado'=>'required',
						   'fecha_inicio'=>'date|required',
						   'fecha_estimada'=>'date|required',
						   

						   );
	// Crear instancia del validador.
 	$validador = Validator::make($data, $reglas);

 	 if($validador->passes()) {
 	 	try{
		 $bd = DB::table('actividad')->insertGetId(array(
			'nombre_Actividad'=>$Actividad,
			'Encargado'=>$encargado,
			'Requerimiento'=>$requerimiento,
			'Departamento'=>$departamento,
			'fecha_Inicio'=>$fechaini,
			'hora_Inicio'=>$horaini,
			'fecha_Estimada'=>$fechaest,
			'descripcion'=>$descripcion));
			
		return Redirect::to('registro_actividades')->with('mensaje', $mensaje1);
		}
		
		catch(ErrorException $e){
			return View::make('registro_actividades')->with('mensaje', $error);
		}
 	 }
 	 return Redirect::to('registro_actividades')->withErrors($validador);

			

	}
	
	
	public function mostrarRequerimientos3(){
			try{
			$req3 = DB::table('actividad')->get();
			}catch(ErrorException $e){}
			
			$html = '<html><body>'
					.'<table>'
					.'<th>Folio</th><th>Prioridad</th><th>Departamento</th><th>Nombre</th><th>Fecha de captura</th><th>Hora de captura</th><th>Descripción</th><th>Capturista</th>'
					.'<?php'				
					.'foreach($req3 as $row){?><tr><td><?php echo $row['.Folio.']; ?></td><td><?php echo $row['.Departamento.']; ?></td><td><?php echo $row['.Nombre.']; ?></td><td><?php echo $row['.fecha_Captura.']; ?></td></tr><?php } ?>'
					.'</table></body></html>';
			
			return PDF::load($html, 'A4','portrait')->download('reporte_requerimientos');
			
			
			//return View::make('requerimientos2')->with('reqt', $reqt);
		
			
		}
		
		
	public function prueba(){
		
		
			try{
			$req3 = DB::table('requerimientos')->get();
			}catch(ErrorException $e){}
			
			return PDF::load($req3, 'A4','portrait')->download('reporte_requerimientos');
			
			
			
			//return View::make('requerimientos2')->with('reqt', $reqt);
		
			
		}
	
}


?>