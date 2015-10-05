<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('control', 'PruebaController@index');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('inicio', function () {
	return view('comun.inicio');
});
Route::get('registro', function () {
	return view('turista.registro');
});
//LISTAS
Route::resource('administracion', 'AdministracionController');
Route::resource('turista', 'TuristaController');
Route::resource('turistas', 'TuristaController@index');
Route::get('registroMunicipio', function () {
	return view('administracion.create');
});
Route::get('terminos', function () {
	return view('comun.TerminosCondiciones');
});
/*Route::get('registroTurista', function () {
	return view('turista.create');
});*/
Route::resource('tur', 'TuristaController@create');
