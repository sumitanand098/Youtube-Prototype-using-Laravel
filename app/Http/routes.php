<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'Front@login');

Route::group(['prefix' => 'admin'], function() {

	Route::get('/dashboard', 'AdminController@dashboard')->middleware('is_admin')->name('dashboard');
	
	Route::get('/users/create', 'AdminController@users_create')->middleware('is_admin')->name('users.create');
	
	Route::post('/users/create', 'AdminInsert@users_add')->middleware('is_admin')->name('users.create');

	Route::get('/users/index', 'AdminController@users_index')->middleware('is_admin')->name('users.index');

	Route::get('/users/edit/{id}', 'AdminController@users_edit')->middleware('is_admin')->name('users.edit');
	
	Route::post('/users/edit', 'AdminController@edit_users')->middleware('is_admin')->name('users.edit');

	Route::get('/users/view/{id}', 'AdminController@users_view')->middleware('is_admin')->name('users.view');
	
	Route::get('/users/delete/{id}', 'AdminController@users_delete')->middleware('is_admin')->name('users.delete');

	Route::get('/videos/index', 'AdminController@videos_index')->middleware('is_admin')->name('videos.index');

	Route::get('/videos/create', 'AdminController@videos_create')->middleware('is_admin')->name('videos.create');
	
	Route::post('/videos/create', 'AdminInsert@videos_add')->middleware('is_admin')->name('videos.create');
	
	Route::get('/videos/view/{id}', 'AdminController@videos_view')->middleware('is_admin')->name('videos.view');

	Route::get('/videos/edit/{id}', 'AdminController@videos_edit')->middleware('is_admin')->name('videos.edit');
	
	Route::post('/videos/edit', 'AdminController@edit_videos')->middleware('is_admin')->name('videos.edit');

	Route::get('/videos/delete/{id}', 'AdminController@videos_delete')->middleware('is_admin')->name('videos.delete');

	Route::get('/web/index', 'AdminController@web_index')->middleware('is_admin')->name('web.index');

	Route::get('/web/edit', 'AdminController@web_edit')->middleware('is_admin')->name('web.edit');

	Route::get('/admin/view', 'AdminController@admin_view')->middleware('is_admin')->name('admin.view');

	Route::get('/admin/edit', 'AdminController@admin_edit')->middleware('is_admin')->name('admin.edit');

});

Route::group(['prefix' => 'users'], function(){

	Route::get('/', 'UserController@users_home')->name('user.home');

	Route::get('/profile', 'UserController@users_profile')->name('user.profile');
	
	Route::get('/broadcast', 'UserController@users_broadcast')->name('user.broadcast');
	
	Route::get('/signin', 'Front@login')->name('user.signin');

	Route::get('/singlevideo/{id}', 'UserController@singlevideo')->name('user.singlevideo');
	
	Route::post('edit', 'UserController@edit_users')->middleware('is_admin')->name('user.edit');
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');