<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/registro_actividades', function()
{
	return View::make('registro_actividades');
});


Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');

Route::get('/actividades', 'actividadController@mostrar');


Route::get('/actividades', 'actividadController@mostrar');
Route::post('/registro_actividades', 'actividadController@registro');


