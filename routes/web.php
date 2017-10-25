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

Route::get('/pdf', 'TestController@index');

Route::post('/convert_currency', 'TestController@convertCurrency');

Route::get('/social_login/{provider}','Auth\RegisterController@redirectToProvider');

Route::get('/social_login/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
