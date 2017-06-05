<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>  'admin'], function () {
    CRUD::resource('video', 'VideoController');
    //CRUD::resource('user', 'UserController');
    CRUD::resource('menu_group', 'MenuGroupController');
    CRUD::resource('menu_item', 'MenuItemController');
    CRUD::resource('contact', 'ContactController');

});

//Auth::routes();

Route::get('/', function(){
    return redirect('admin');
});

Route::group(['prefix' => 'api/v1', 'namespace' => 'Api', 'middleware' =>  'cors'], function(){
    Route::get('token', 'UserController@token')->name('token');
    Route::match(['post','get'], 'login', 'UserController@login')->name('api_login');
    Route::match(['post','get'], 'confirm_login', 'UserController@loginByToken')->name('api_login_confirm');
    //Route::get('videos', 'VideoController@index')->name('api_videos');

    Route::get('menu_item/{menuItem}/videos', 'VideoController@showByMenuItem')->name('menu_videos');

    Route::get('partner_menu/{userId}', 'MenuGroupController@listForPartner');
    Route::get('client_menu', 'MenuGroupController@listForClient')->name('client_menu');

    //Store contact form
    Route::get('contact', 'ContactController@index')->name('list_contact');
    Route::match(['post','get'], 'contact', 'ContactController@store')->name('store_contact');
    Route::match(['post','get'], 'register_user', 'UserController@register')->name('register_user');
});
