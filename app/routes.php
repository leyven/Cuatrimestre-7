<?php


Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');

Route::get('/actividades', 'actividadController@mostrar');
Route::get('/registro_actividades', 'actividadController@registro');
Route::get('/registro_requerimientos', 'requerimientoController@registro');

