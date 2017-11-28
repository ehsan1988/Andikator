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

Route::get('/', 'LetterController@index');
Route::get('/create', 'LetterController@create');
Route::get('/letters/{letter}', 'LetterController@show');
Route::post('/{letter}', 'LetterController@store');
Route::get('/contacts/create', 'ContactController@create');
Route::post ('/contacts/create', 'ContactController@store');


