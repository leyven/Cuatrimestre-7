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

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');

Route::get('/actividades', 'actividadController@mostrar');
Route::get('/registro_actividades', 'actividadController@registro');
Route::get('/registro_requerimientos', 'requerimientoController@registro');
Route::get('/inicioSesion','inicioController@sesion');

