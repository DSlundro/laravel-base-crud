<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index')->name('app');

Route::get('/', function(){
    return view('comics.home');
})->name('home');

// INDEX
Route::get('/comics', 'ComicsController@index')->name('comics.index');
// CREATE
Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
// STORE
Route::post('/comics', 'ComicsController@store')->name('comics.store');
// SHOW
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');
// EDIT
Route::get('/comics/{comic}/edit', 'ComicsController@edit')->name('comics.edit');
// UPDATE
Route::put('/comics/{comic}', 'ComicsController@update')->name('comics.update');
// DESTROY
Route::delete('/comics/{comic}/', 'ComicsController@destroy')->name('comics.destroy');


//Route::resource('/comics', 'ComicsController');
