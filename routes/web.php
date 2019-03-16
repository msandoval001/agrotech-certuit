<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('api/v1/users','UserController@listarUsuarios');
Route::get('api/v1/users/{id}','UserController@consultarUsuario');
Route::post('api/v1/users','UserController@register');

Route::get('api/v1/cultivos','CultivoController@listarCultivos');
Route::get('api/v1/cultivos/{id}','CultivoController@consultarUsuario');
Route::post('api/v1/cultivos','CultivoController@register');

Route::get('api/v1/productos','ProductoController@listarProductos');
Route::get('api/v1/productos/{id}','ProductoController@consultarUsuario');
Route::post('api/v1/productos','ProductoController@register');

Route::get('api/v1/demandas','DemandaCultivoController@listarCultivos');
Route::get('api/v1/demandas/{id}','DemandaCultivoController@consultarUsuario');
Route::post('api/v1/demandas','DemandaCultivoController@register');

Route::get('api/v1/ofertas','OfertaController@listarCultivos');
Route::get('api/v1/ofertas/{id}','OfertaController@consultarUsuario');
Route::post('api/v1/ofertas','OfertaController@register');

