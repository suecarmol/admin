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

Route::get('/', 'WelcomeController@index');

Route::resource('anuncios', 'AnunciosController');
Route::resource('usuarios', 'UsuariosController');
Route::resource('datos', 'DatosController');
Route::get('actualizaciones/municipios', 'ActualizacionesController@getMunicipios');
Route::get('actualizaciones/colonias', 'ActualizacionesController@getColonias');
Route::get('actualizaciones/zip', 'ActualizacionesController@getZip');
Route::get('actualizaciones/coordenadas_colonia', 'ActualizacionesController@getCoordenadascolonia');
Route::get('actualizaciones/coordenadas_zip', 'ActualizacionesController@getCoordenadaszip');
Route::get('actualizaciones/busqueda', 'ActualizacionesController@getBusqueda');
Route::resource('actualizaciones', 'ActualizacionesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
