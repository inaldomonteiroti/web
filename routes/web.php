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

