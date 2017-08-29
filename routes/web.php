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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/master', function () {
    return view('master');
});
Route::get('/test', function () {
    return view('Test');
});

Route::get('/createevent','Homecontroller@createevent');
Route::get('page','Homecontroller@page');
Route::get('/createevent', 'Homecontroller@createevent');
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

Route::get('/index', 'EventController@user');
Route::get('/change', 'EventController@password');
Route::get('/map', 'HomeController@map');
Route::get('/aa', 'HomeController@stick');


