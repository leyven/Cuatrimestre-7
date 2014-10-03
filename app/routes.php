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

<<<<<<< HEAD
Route::get('/CatalogoAyuda', 'CatalogoController@mostrarCatalogo');
=======
Route::get('/actividades', 'actividadController@mostrar');
>>>>>>> 6a3b7aaa4fbeb0286bb61c04f9556b73cb918f11
