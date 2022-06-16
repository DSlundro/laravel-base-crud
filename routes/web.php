<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ComicsController@index')->name('app');
Route::get('/', 'ComicsController@index')->name('main');
Route::get('contents.create', 'ComicsController@index')->name('create');
