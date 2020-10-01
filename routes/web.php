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

Route::get('/','stackController@index');
Route::get('/about','stackController@about');
Route::get('/contact','stackController@contact');
Route::post('/contact','stackController@contact_done');

Route::get('/get_start','stackController@get_start');
Route::post('/signup','stackController@signup');

Route::post('/login','stackController@login');
Route::post('/subscribe','stackController@subscribe');

Route::get('logout','stackController@logout');

