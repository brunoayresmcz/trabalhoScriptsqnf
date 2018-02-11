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


Route::get('login', 'LoginController@login')->name('login');


Route::group(['prefix' => '/livros'], function() {
    Route::get('/','LivroController@listar')->name('livros.listar');
    Route::get('/novo', 'LivroController@cadastrar')->name('livros.cadastrar');
    Route::get('/{id}', 'LivroController@visualizar')->name('livros.visualizar');
    Route::get('/editar/{id}', 'LivroController@editar')->name('livros.editar');
});



