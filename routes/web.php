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

Route::get('/admin/home', 'DisplayController@index')->name('admin.home');

Route::get('/admin/services',[
    'uses'=>'DisplayController@services',
    'as'=>'admin.services'
]);

Route::get('/admin/hero',[
    'uses'=>'DisplayController@hero',
    'as'=>'admin.hero'
]);

Route::get('/admin/services/add',[
    'uses'=>'DisplayController@servicesadd',
    'as'=>'admin.hero'
]);

Route::get('/admin/social',[
    'uses'=>'DisplayController@social',
    'as'=>'admin.social'
]);

Route::get('/admin/hero/text',[
    'uses'=>'DisplayController@herotext',
    'as'=>'admin.hero.text'
]);

Route::get('/admin/setting',[
    'uses'=>'DisplayController@setting',
    'as'=>'admin.setting'
]);

Route::get('/admin/download',[
    'uses'=>'DisplayController@download',
    'as'=>'admin.download'
]);

Route::get('/admin/download/add',[
    'uses'=>'DisplayController@downloadAdd',
    'as'=>'admin.download.add'
]);

Route::get('/admin/about',[
    'uses'=>'DisplayController@about',
    'as'=>'admin.about'
]);

Route::get('/admin/about/add',[
    'uses'=>'DisplayController@aboutAdd',
    'as'=>'admin.about.add'
]);

Route::get('/admin/news',[
    'uses'=>'DisplayController@news',
    'as'=>'admin.news'
]);

Route::get('/admin/news/add',[
    'uses'=>'DisplayController@newsAdd',
    'as'=>'admin.news.add'
]);

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