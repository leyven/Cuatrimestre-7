<?php


Route::get('/registro_actividades', function()
{
	return View::make('registro_actividades');
});


Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');

Route::get('/actividades', 'actividadController@mostrar');



Route::get('/actividades', 'actividadController@mostrar');
Route::post('/registro_actividades', 'actividadController@registro');
Route::get('/registro_requerimientos', 'requerimientoController@registro');


