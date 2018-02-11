<?php


/* ========= MTEMATICA =========== */
Route::group(['prefix' => 'matematica'], function() {
    Route::get('soma/{a}/{b}', 'MatematicaController@soma');
    Route::get('subtracao/{a}/{b}', 'MatematicaController@subtracao');
    Route::get('divisao/{a}/{b}', 'MatematicaController@divisao');
    Route::get('multiplicacao/{a}/{b}', 'MatematicaController@multiplicacao');
});

