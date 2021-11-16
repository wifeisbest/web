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
Route::get('/gioi-thieu', 'MyController@gioithieu');
Route::get('/policies', 'MyController@policies');

// all post
// benle
Route::get('/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi', 'MyController@mucdich');
Route::get('/lo-trinh-hoc-viet-ma-xay-dung-blog-website', 'MyController@lotrinh');
Route::get('/cach-thuc-mang-luoi-internet-hoat-dong', 'MyController@cachthuc');
Route::get('/giao-thuc-tcp-ip-http-va-https', 'MyController@giaothuc');
Route::get('/mo-hinh-client-sever', 'MyController@mohinh');
Route::get('/cac-buoc-khi-ban-da-co-1-website', 'MyController@cacbuoc');
Route::get('/hoc-lap-trinh-de-lam-gi', 'MyController@hoclaptrinh');

// html
Route::get('/website-la-gi', 'MyController@website');
Route::get('/html-la-gi', 'MyController@html1');
Route::get('/hoat-dong-cua-cac-the-trong-tai-lieu-html', 'MyController@hoatdong');
Route::get('/the-html-co-ban-nhat', 'MyController@thehtml');
Route::get('/thuoc-tinh-trong-the-html', 'MyController@thuoctinh');
Route::get('/bo-cuc-website-nhu-the-nao', 'MyController@bocuc');
Route::get('/cach-su-dung-cac-the-html-co-ban', 'MyController@cachsudung');

// javascript


Route::get('/ngon-ngu-lap-trinh-javascript', 'MyController@ngonngu');
Route::get('/bien-va-bieu-thuc-toan-hoc-trong-javascript', 'MyController@bien');
Route::get('/kieu-gia-tri-cua-bien-trong-javascript', 'MyController@kieu');
Route::get('/hieu-ro-ve-ham-trong-javascript', 'MyController@ham');
Route::get('/arrow-function-trong-javascript', 'MyController@muiten');




//Nodejs
Route::get('/nodejs-la-gi', 'MyController@node');
Route::get('/dang-ky-dang-nhap-su-dung-nodejs', 'MyController@dangky');


//css
Route::get('/css-co-ban-cho-nguoi-moi-bat-dau', 'MyController@csscoban');
Route::get('/huong-dan-su-dung-dev-tools-co-ban', 'MyController@devtools');
Route::get('/cach-su-dung-cac-don-vi-do-trong-css', 'MyController@donvi');
Route::get('/cach-su-dung-cac-bo-chon-trong-css3', 'MyController@bochon');