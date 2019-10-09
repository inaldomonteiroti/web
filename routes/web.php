<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sejabemvindocrm');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Cadastrar novo usuário 
Route::get('/register', 'HomeController@index')->name('register');

//Rota para painel administrativo
Route::get('/admin', 'HomeController@indexadmin');
Auth::routes();

Route::get('/usuarios/listar', 'UsuarioController@listar')->name('listar');
Route::get('/registrar', 'UsuarioController@registrar')->name('registrar');
Route::post('/salvar', 'UsuarioController@salvar')->name('salvar');
Route::get('/login', 'AutenticacaoController@login')->name('login');
Route::post('/logar', 'AutenticacaoController@logar')->name('logar');

//Route::get('/', 'AutenticacaoController@home')->name('home');
Route::get('/logout', 'AutenticacaoController@logout')->name('logout');


Route::get('/usuarios/{id}/editar', 'UsuarioController@editar')->name('editar');






