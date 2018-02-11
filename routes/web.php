<?php

/* ========= ATIVIDADE ========== */
Route::get('ola-mundo', function() {
})->name('ola');

Route::get('teste', function() {
    //echo route('ola');
    echo route('matematica.soma', ['a' => 10, 'b' => 5]);
});


/* ========= MTEMATICA =========== */
Route::group(['prefix' => 'matematica'], function() {
    Route::get('soma/{a}/{b}', function($a, $b) { echo $a+$b; })->name('matematica.soma');
    Route::get('subtracao/{a}/{b}', function($a, $b) { echo $a-$b; });
    Route::get('divisao/{a}/{b}', function($a, $b) { echo $a/$b; });
    Route::get('multiplicacao/{a}/{b}', function($a, $b) { echo $a*$b; });
});

