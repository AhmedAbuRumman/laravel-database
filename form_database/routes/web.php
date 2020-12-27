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

Route::get('/form','RegisterUserController@index');
Route::post('/form','RegisterUserController@valid');
// Route::get('/form/{id}/destroy', 'RegisterUserController@destroy')->name('delete');
Route::get('/destroy/{id}','RegisterUserController@destroy');
Route::get('/edit/{id}','RegisterUserController@show');
Route::post('/edit/{id}','RegisterUserController@update');