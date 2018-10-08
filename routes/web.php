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

Route::get('/', [
    'uses'=>'DisplayController@welcome',
    'as'=>'welcome'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home', 'DisplayController@index')->name('admin.home');

Route::get('/admin/services',[
    'uses'=>'serviceController@services',
    'as'=>'admin.services'
]);

Route::post('/admin/services/store',[
    'uses' => 'serviceController@createService',
    'as' => 'admin.service.store'
]);

Route::get('/admin/services/add',[
    'uses'=>'serviceController@servicesadd',
    'as'=>'admin.hero'
]);

Route::get('/admin/hero',[
    'uses'=>'heroController@hero',
    'as'=>'admin.hero'
]);

Route::post('/admin/hero/editText',[
    'uses'=>'heroController@editHerotext',
    'as'=>'admin.hero.editHeroText'
]);

Route::patch('/admin/hero/editImage',[
    'uses'=>'heroController@editHeroImage',
    'as'=>'admin.hero.editHeroImage'
]);


// Social
Route::get('/admin/social',[
    'uses'=>'socialController@social',
    'as'=>'admin.social'
]);

Route::post('/admin/social/add/{id}',[
    'uses'=>'socialController@socialAdd',
    'as'=>'admin.social.add'
]);

Route::patch('/admin/social/save',[
    'uses'=>'socialController@socialSave',
    'as'=>'admin.social.save'
]);

//Messages
Route::get('/admin/inbox',[
    'uses'=>'messageController@index',
    'as'=>'admin.inbox'
]);

Route::get('/admin/message/favorite',[
    'uses' => 'messageController@favIndex',
    'as'=>'admin.message.favorite'
]);

Route::post('/message',[
    'uses'=>'messageController@message',
    'as'=>'message'
]);

Route::post('/admin/message/deleteAll',[
    'uses'=>'messageController@deleteAll',
    'as'=>'admin.message.deleteAll'
]);

Route::get('/updateInbox','messageController@updateInbox');

Route::get('/favorite','messageController@favorite');

Route::get('/unfavorite','messageController@unfavorite');

Route::get('/admin/setting',[
    'uses'=>'DisplayController@setting',
    'as'=>'admin.setting'
]);

// Download
Route::get('/admin/download',[
    'uses'=>'downloadFileController@download',
    'as'=>'admin.download'
]);

Route::post('/admin/download/add',[
    'uses'=>'downloadFileController@downloadAdd',
    'as'=>'admin.download.add'
]);

Route::post('/admin/download/edit',[
    'uses'=>'downloadFileController@downloadEdit',
    'as'=>'admin.download.edit'
]);

Route::post('/admin/download/delete',[
    'uses'=>'downloadFileController@downloadDelete',
    'as'=>'admin.download.delete'
]);

Route::get('/admin/about',[
    'uses'=>'DisplayController@about',
    'as'=>'admin.about'
]);

Route::get('/admin/about/add',[
    'uses'=>'DisplayController@aboutAdd',
    'as'=>'admin.about.add'
]);

//News
Route::get('/admin/news',[
    'uses'=>'newsController@news',
    'as'=>'admin.news'
]);

Route::post('/admin/news/add',[
    'uses'=>'newsController@newsAdd',
    'as'=>'admin.news.add'
]);

Route::patch('/admin/news/edit',[
    'uses'=>'newsController@newsEdit',
    'as'=>'admin.news.edit'
]);

Route::patch('admin/news/delete',[
    'uses'=>'newsController@newsDelete',
    'as'=>'admin.news.delete'
]);

Route::get('/services/single', [
    'uses' => 'DisplayController@single',
    'as' => 'services.single'
]);



Route::get('/all-services',[
    'uses' => 'DisplayController@allServices',
    'as' => 'allservices'
]);

Route::get('/single',[
    'uses' => 'DisplayController@single',
    'as' => 'single'
]);

Route::get('/about-us' ,[
    'uses' => 'DisplayController@about1' ,
    'as' => 'about'
]);

Route::get('/whats-new' ,[
    'uses' => 'DisplayController@download1' ,
    'as' => 'download'
]);

Route::get('/contact-us',[
    'uses' => 'DisplayController@contact',
    'as' => 'contact'
]);
