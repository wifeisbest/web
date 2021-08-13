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



Route::get('/nodejs', 'MyController@nodejs');
Route::get('/javascript', 'MyController@javascript');
Route::get('/css3', 'MyController@css3');
Route::get('/benle', 'MyController@benle');
Route::get('/html', 'MyController@html');
Route::resource('/baiviet', 'PostController',['only' => ['create','edit','store','update','destroy','index']])->middleware('auth');


Route::get('/show','MyController@showAllPost')->middleware('auth');




Route::get('/', 'MyController@index');
Auth::routes(['register' => false,'reset' => false]);
//['register' => false,'reset' => false]
Route::get('/home', 'HomeController@index')->name('home');
