<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Buscador
Route::get('buscar-tipo/{tipo}','InmuebleController@buscarTipo');
Route::get('info-inmueble/{id}','InmuebleController@info');

Route::get('lista-usuarios','UserController@lista');

//Web
Route::post('store-inmueble','InmuebleController@store');

