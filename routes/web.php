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

Route::get('/','FormController@index');

Route::get('/form/create','FormController@create');

Route::post('/form/post','FormController@storeForm');

Route::get('/thanks','FormController@thanks');
