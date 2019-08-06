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
    return view('auths.login');// role nya dapat di sesuaikan  menjadi awal/home
});

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' =>'auth'],function(){//tidak b

    Route::get('/pelayan','AuthController@index');// mainni disini saja untuk mengganti roll nya
    Route::get('/dashboard','DashboardController@index');
    Route::get('/kasir','KasirController@index');
    Route::post('/kasir/create','KasirController@create');
    Route::get('/kasir/{id}/edit','KasirController@edit');
    Route::post('/kasir/{id}/update','KasirController@update');
    Route::get('/kasir/{id}/delete','KasirController@delete');

    Route::get('/pelayan','PelayanController@index');
    Route::post('/pelayan/create','PelayanController@create');
    Route::get('/pelayan/{id}/edit','PelayanController@edit');
    Route::post('/pelayan/{id}/update','PelayanController@update');
    Route::get('/pelayan/{id}/delete','PelayanController@delete');

    Route::get('/makan','MakanController@index');
    Route::post('/makan/create','MakanController@create');
    Route::get('/makan/{id}/edit','MakanController@edit');
    Route::post('/makan/{id}/update','MakanController@update');
    Route::get('/makan/{id}/delete','MakanController@delete');

    Route::get('/minum','MinumController@index');
    Route::post('/minum/create','MinumController@create');
    Route::get('/minum/{id}/edit','MinumController@edit');
    Route::post('/minum/{id}/update','MinumController@update');
    Route::get('/minum/{id}/delete','MinumController@delete');

    Route::get('/Jmlmakan','JmlmakanController@index');
});
