<?php
// Home
Route::get('/', function() {
	return view('index');
});
Route::get('home', 'OrganizadoresController@visualizar');

// Cadastro
Route::get('/cadastro', function() {
	return view('cadastro.index');
});
Route::get('/cadastro/piloto', function() {
	return view('cadastro.piloto');
});
Route::get('/cadastro/organizador', function() {
	return view('cadastro.organizador');
});

// Organizador
Route::get('/organizadores', 'OrganizadoresController@index');
Route::get('/organizador/{id}', 'OrganizadoresController@visualizar');
Route::post('/cadastrar/organizador', 'OrganizadoresController@salvar');

// Piloto
Route::get('/pilotos', 'PilotosController@index');
Route::get('/piloto/{id}', 'PilotosController@visualizar');
Route::get('/pilotos/cadastro', function() {
	return view('pilotos/form');
});
Route::post('/pilotos', 'PilotosController@salvar');
Route::get('/piloto/{id}/editar', 'PilotosController@editar');
Route::put('/pilotos', 'PilotosController@alterar');
Route::delete('/pilotos', 'PilotosController@deletar');

// Categoria
Route::get('/categorias', 'CategoriasController@index');

// Evento
Route::get('/eventos', 'EventosController@index');
Route::get('/eventos/{id}', 'EventosController@visualizar');

// Route::get('/pilotos', 'PilotosController@listarPilotos');

Auth::routes();

