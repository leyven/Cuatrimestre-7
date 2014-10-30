<?php


Route::get('/registro_actividades', function()
{
	return View::make('registro_actividades');
});

Route::get('/registro_requerimientos', function()
{
	return View::make('registro_requerimientos');
});

Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');
Route::get('/actividades', 'actividadController@mostrar');

Route::post('/registro_actividades', 'actividadController@registro');
Route::post('/registro_requerimientos', 'requerimientoController@registro_requerimientos');


/*

Route::post('/registro_requerimientos', function()
{
	$data = Input::all();
	$reglas=$array = array('Folio' => 'alpha_num', 
						   'Prioridad'=>'alpha_num',
						   'Nombre'=>'alpha',
						   //'fecha_captura'=>'date',						   
						   'Descripcion'=>'alpha_num',
						   'Capturista'=>'alpha_num'
						   );
	// Crear instancia del validador.
 	$validador = Validator::make($data, $reglas);

 	 if($validador->passes()) {
 // Normalmente haríamos algo con los datos.
	Route::post('/registro_requerimientos', 'requerimientoController@registro_requerimientos')->with(data,'data');

 	}
 	 		
 		
 		
 	

return Redirect::to('registro_requerimientos')->withErrors($validador);
	
});
