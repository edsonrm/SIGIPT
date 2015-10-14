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
Route::resource('proveedor', 'ProveedorController');
Route::resource('turistas', 'TuristaController@index');
/*Route::get('registroMunicipio', function () {
	return view('administracion.create');
});*/

Route::get('terminos', function () {
	return view('comun.TerminosCondiciones');
});
Route::get('registroTurista', 'TuristaController@create' );
Route::get('registroMunicipio', 'AdministracionController@create' );
Route::get('registroProveedor', 'ProveedorController@create' );
/*Route::get('registroTurista', function () {
		$turistas =\DB::table('turistas')->lists('nombre', 'id');
		$selected = array();
		$turistas2 =\DB::table('administracions')->lists('nombre_administracion', 'id');
		$selected2 = array();
		return view('turista.create', compact('turistas', 'selected'), compact('turistas2', 'selected2'));
});*/
//Route::resource('registroTurista', 'TuristaController@create');
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contact', ['as' => 'contact', 'uses' => 'MailController@index'] );
Route::get('finRegistro/{confirma}', function($confirma){

//	if (Hash::check($confirma, $hashedPassword))
//		{
    // The passwords match...
//		}
return 'se validará el correo '.$confirma;
});

//EJEMPLO SUBIR ARCHIVOS
Route::get('formulario', 'StorageController@index');
Route::post('storage/save', 'StorageController@save');
//traer archivo
Route::get('storage/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

});
Route::get('galeria', 'StorageController@index');
// FIN EJEMPLO SUBIR