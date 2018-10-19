<?php


/** LOGIN **/
Route::get('login', 'LoginController@login')->name('login');
Route::get('/', 'LoginController@login')->name('login');
Route::post('logar', 'LoginController@logar')->name('logar');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::get('register', 'LoginController@cadastrar')->name('registro');
Route::get('sismain', 'HomeController@Main')->name('sismain');

/** REGISTRO **/
Route::get('login', 'registroController@login')->name('login');

/** Sistema  **/
Route::get('professorInsert', 'Homecontroller@professorInsert')->name('cadastoProfessor');
Route::get('user', 'Homecontroller@user')->name('user');



