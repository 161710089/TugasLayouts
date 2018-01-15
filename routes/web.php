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
    return view('index');
});
Route::get('konten',function(){
	return view('konten1');
});

Route::get('konten1',function(){
	return view('konten2');
});
Route::get('konten2',function(){
	return view('konten3');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
