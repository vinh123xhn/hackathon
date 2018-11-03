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


Route::get('/', function () {
  return view('welcome');
});

Route::get('/create','TestController@create');

Route::get('/quantity','QuestionController@addQuantity')->name('addquantity');


Route::get('/', 'QuestionController@index');

Route::get('/show-input', 'QuestionController@showInput')->name('showInput');

Route::get('/show-question/{id}', 'QuestionController@showQuestion')->name('showQuestion');

Route::post('/create-question/{id}', 'QuestionController@createQuestion')->name('createQuestion');

Route::get('/done/{id}', 'QuestionController@done')->name('done');
