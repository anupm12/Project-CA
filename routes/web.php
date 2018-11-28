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

Auth::routes(['verify' => true]);

Route::get('/verify/message', function () {
   echo hello;
})->middleware('verified')->name('verify.message');

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'prefix' => 'admin', 'middleware' => ['auth:admin']], function() {


    Route::get('/home', 'DisplayController@index')->name('admin.home');

    //Service
Route::get('/services',[
    'uses'=>'serviceController@services',
    'as'=>'admin.services'
]);

Route::get('/services/add',[
    'uses'=>'serviceController@servicesAdd',
    'as'=>'admin.services.add'
]);

Route::post('/services/store',[
    'uses' => 'serviceController@createService',
    'as' => 'admin.service.store'
]);

Route::get('/services/edit/{id}',[
    'uses'=>'serviceController@servicesEdit',
    'as'=>'admin.services.edit'
]);

Route::post('/services/update/{id}',[
    'uses'=>'serviceController@updateService',
    'as'=>'admin.services.update'
]);

Route::patch('/services/delete/',[
    'uses'=>'serviceController@deleteService',
    'as'=>'admin.services.delete'
]);

Route::get('/hero',[
    'uses'=>'heroController@hero',
    'as'=>'admin.hero'
]);

Route::post('/hero/editText',[
    'uses'=>'heroController@editHerotext',
    'as'=>'admin.hero.editHeroText'
]);

Route::patch('/hero/editImage',[
    'uses'=>'heroController@editHeroImage',
    'as'=>'admin.hero.editHeroImage'
]);


// Social
Route::get('/social',[
    'uses'=>'socialController@social',
    'as'=>'admin.social'
]);

Route::post('/social/add/{id}',[
    'uses'=>'socialController@socialAdd',
    'as'=>'admin.social.add'
]);

Route::patch('/social/save',[
    'uses'=>'socialController@socialSave',
    'as'=>'admin.social.save'
]);

//Messages
Route::get('/inbox',[
    'uses'=>'messageController@index',
    'as'=>'admin.inbox'
]);

Route::get('/message/favorite',[
    'uses' => 'messageController@favIndex',
    'as'=>'admin.message.favorite'
]);

Route::post('/message',[
    'uses'=>'messageController@message',
    'as'=>'message'
]);

Route::post('/message/deleteAll',[
    'uses'=>'messageController@deleteAll',
    'as'=>'admin.message.deleteAll'
]);

Route::get('/updateInbox','messageController@updateInbox');

Route::get('/favorite','messageController@favorite');

Route::get('/unfavorite','messageController@unfavorite');

Route::get('/setting',[
    'uses'=>'DisplayController@setting',
    'as'=>'admin.setting'
]);

// Download
Route::get('/download',[
    'uses'=>'downloadFileController@download',
    'as'=>'admin.download'
]);

Route::post('/download/add',[
    'uses'=>'downloadFileController@downloadAdd',
    'as'=>'admin.download.add'
]);

Route::patch('/download/edit',[
    'uses'=>'downloadFileController@downloadEdit',
    'as'=>'admin.download.edit'
]);

Route::delete('/download/delete',[
    'uses'=>'downloadFileController@downloadDelete',
    'as'=>'admin.download.delete'
]);

Route::get('/publish','downloadFileController@publish');

Route::get('/unpublish','downloadFileController@unpublish');

//About
Route::get('/about',[
    'uses'=>'aboutController@about',
    'as'=>'admin.about'
]);

Route::get('/about/aboutAdd',[
    'uses'=>'aboutController@aboutAdd',
    'as'=>'admin.about.aboutAdd'
]);


Route::get('/about/aboutEdit/{id}',[
    'uses'=>'aboutController@aboutEdit',
    'as'=>'admin.about.aboutEdit'
]);


Route::post('/about/add',[
    'uses'=>'aboutController@add',
    'as'=>'admin.about.add'
]);

Route::post('/about/edit/{id}',[
    'uses'=>'aboutController@edit',
    'as'=>'admin.about.edit'
]);

Route::patch('/about/delete/',[
    'uses'=>'aboutController@delete',
    'as'=>'admin.about.delete'
]);

//News
Route::get('/news',[
    'uses'=>'newsController@news',
    'as'=>'admin.news'
]);

Route::post('/news/add',[
    'uses'=>'newsController@newsAdd',
    'as'=>'admin.news.add'
]);

Route::patch('/news/edit',[
    'uses'=>'newsController@newsEdit',
    'as'=>'admin.news.edit'
]);

Route::patch('/news/delete',[
    'uses'=>'newsController@newsDelete',
    'as'=>'admin.news.delete'
]);

Route::get('/users',[
    'uses'=>'loginUsersController@loginUsers',
    'as'=>'admin.users'
]);

Route::get('/user/profile/{id}',[
    'uses'=>'loginUsersController@profile',
    'as'=>'admin.user.profile'
]);

Route::post('/user/profile/avatar',[
    'uses'=>'loginUsersController@profileAvatar',
    'as'=>'admin.user.profile.avatar'
]);

Route::post('/user/profile/password/change',[
    'uses'=>'loginUsersController@changePassword',
    'as'=>'admin.user.profile.password.change'
]);

Route::post('/user/name/change',[
    'uses' => 'loginUsersController@nameChange',
    'as' => 'admin.user.name.change'
]);

//Contact

Route::get('/contact',[
    'uses' => 'contactController@index',
    'as'=>'admin.contact'
]);

Route::post('/contact/change',[
    'uses' => 'contactController@editContact',
    'as'=>'admin.contact.change'
]);

Route::post('/contact/publish',[
    'uses' => 'contactController@publish',
    'as'=>'admin.contact.publish'
]);




});







Route::get('/services/single', [
    'uses' => 'DisplayController@single',
    'as' => 'services.single'
]);



Route::get('/all-services',[
    'uses' => 'DisplayController@allServices',
    'as' => 'allservices'
]);

Route::get('/single/{id}',[
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

Route::get('/results','DisplayController@results');

Route::get('login/{provider}',[
   'uses' =>'Auth\LoginController@redirectToProvider',
   'as'=>'login.auth'
   ]);

Route::get('users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::get('admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

Route::post('admin/login/into','Auth\AdminLoginController@login')->name('admin.login.into');

Route::get('admin/register','Auth\AdminRegisterController@showRegisterForm')->name('admin.register');

Route::post('admin/register/store','Auth\AdminRegisterController@register')->name('admin.register.store');

//Password Reset
Route::post('admin/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('admin/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
