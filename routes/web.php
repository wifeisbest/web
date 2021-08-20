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

//detail
Route::get('/detail', 'MyController@detail');
// contact
Route::get('/contact', 'MyController@contact');

// all post
// benle
Route::get('/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi', 'MyController@mucdich');
Route::get('/lo-trinh-hoc-viet-ma-xay-dung-blog-website', 'MyController@lotrinh');
Route::get('/cach-thuc-mang-luoi-internet-hoat-dong', 'MyController@cachthuc');
Route::get('/giao-thuc-tcp-ip-http-va-https', 'MyController@giaothuc');
Route::get('/mo-hinh-client-sever', 'MyController@mohinh');

// html
Route::get('/website-la-gi', 'MyController@website');