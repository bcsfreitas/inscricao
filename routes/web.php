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

Route::get('/', function() {
	return view('welcome');
});
Route::get('/pilotos', 'PilotosController@index');
Route::post('/pilotos', 'PilotosController@salvar');
Route::put('/pilotos', 'PilotosController@alterar');
Route::delete('/pilotos', 'PilotosController@deletar');

Route::get('/piloto/cadastro', 'PilotosController@form');
Route::get('/piloto/{id}', 'PilotosController@visualizar');



Route::get('/categorias', 'CategoriasController@index');
Route::get('/eventos', 'EventosController@index');

// Route::get('/pilotos', 'PilotosController@listarPilotos');

Auth::routes();

