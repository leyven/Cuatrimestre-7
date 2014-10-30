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



