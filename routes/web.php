<?php


/** LOGIN **/
Route::get('login', 'LoginController@login')->name('login');
Route::post('logar', 'LoginController@logar')->name('logar');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::get('register', 'LoginController@cadastrar')->name('registro');
Route::get('sismain', 'HomeController@Main')->name('sismain');

/** REGISTRO **/
Route::get('login', 'registroController@login')->name('login');

/** Sistema  **/
Route::get('professorInsert', 'Homecontroller@professorInsert')->name('cadastoProfessor');
Route::get('user', 'Homecontroller@user')->name('Usuario');





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



