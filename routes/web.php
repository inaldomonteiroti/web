<?php

/*
|--------------------------------------------------------------------------
| Rotas da Aplicação
|--------------------------------------------------------------------------
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
|
*/

//Primeira rota chamada ao carregar o endereco
Route::get('/', function () { return view('sejabemvindocrm');});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Cadastrar novo usuário 
Route::get('/register', 'HomeController@index')->name('register');

//Rota para painel administrativo
Route::get('/admin', 'HomeController@indexadmin');

Route::get('/registrar', 'UsuarioController@registrar')->name('registrar');
Route::post('/salvar', 'UsuarioController@salvar')->name('salvar');
Route::get('/login', 'AutenticacaoController@login')->name('login');
Route::post('/logar', 'AutenticacaoController@logar')->name('logar');
Route::get('/logout', 'AutenticacaoController@logout')->name('logout');
//Route::get('/', 'AutenticacaoController@home')->name('home');

Route::get('/usuarios/listar', 'UsuarioController@listar')->name('listar');
Route::get('/usuarios/{id}/editar', 'UsuarioController@editar')->name('editar');
Route::post('/usuarios/{id}/atualizar', 'UsuarioController@atualizar')->name('atualizar');
Route::get('/usuarios/deletar/{id}', 'UsuarioController@deletar')->name('deletar');





