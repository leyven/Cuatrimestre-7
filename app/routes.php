<?php


Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');

Route::get('/actividades', 'actividadController@mostrar');
Route::get('/registro_actividades', 'actividadController@registro');

