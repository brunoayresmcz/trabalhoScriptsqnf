<?php


/** LOGIN **/
Route::get('login', 'LoginController@login')->name('login');
Route::post('logar', 'LoginController@logar')->name('logar');
Route::get('logout', 'LoginController@logout')->name('logout');


/* ========== LIVROS ============ */
Route::group(['prefix' => '/livros', 'middleware' => ['login']], function() {
    Route::get('/','LivroController@listar')->name('livros.listar');
    Route::get('/novo', 'LivroController@cadastrar')->name('livros.cadastrar');
    Route::post('/salvar', 'LivroController@salvar')->name('livros.salvar');
    Route::get('/{id}', 'LivroController@visualizar')->name('livros.visualizar');
    Route::get('/editar/{id}', 'LivroController@editar')->name('livros.editar');
    Route::post('/atualizar/{id}', 'LivroController@atualizar')->name('livros.atualizar');
    Route::get('/excluir/{id}', 'LivroController@excluir')->name('livros.excluir');
});



