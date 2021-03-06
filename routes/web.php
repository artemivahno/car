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

//Route::get('/', 'Controller@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');

get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
