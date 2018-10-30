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

Route::get('usuario', 'UsuarioController@index');
Route::get('usuario/{id}', 'UsuarioController@show');
Route::post('usuario', 'UsuarioController@store');
/*Route::put('usuarios/{id}', 'UsuariosController@update');*/

Route::delete('usuario/{id}', 'UsuarioController@delete');