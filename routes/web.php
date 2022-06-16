<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index')->name('home');

Route::get('/comics', 'ComicsController@index')->name('comics.index');

Route::get('/comics/create', 'ComicsController@create')->name('comics.create');

Route::post('/comics', 'ComicsController@store')->name('comics.store');

Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');



