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

Route::get('/services/single', [ 
    'uses' => 'DisplayController@single',
    'as' => 'services.single'
]);

Route::get('/services', [ 
    'uses' => 'DisplayController@services',
    'as' => 'services'
]);

Route::get('/about-us' ,[
    'uses' => 'DisplayController@about' ,
    'as' => 'about'
]);

Route::get('/whats-new' ,[
    'uses' => 'DisplayController@download' ,
    'as' => 'download'
]);