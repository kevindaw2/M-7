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

use app\controllers\UserController;


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/saludar', function()
{
	return View::make('greeting', ['name' => 'James']);
});

Route::get('/mostrar-fecha', function()
{	
	$titulo = "Mostrando la fecha"; 
	return View::make('mostrar-fecha', ['titulo' =>  $titulo]);
});  

Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'No hay seleccionada ninguna película', $year = 2022) {
	return View::make('pelicula', ['titulo' => $titulo, 'year' => $year]); 

})->where(array(
	'titulo' => '[a-zA-Z]+', 
	'year' => '[0-9]+'
));

Route::get('/pagina-generica', function()
{
	return View::make('pagina');
});

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('profile', [UserController::class, 'show'])->middleware('auth');