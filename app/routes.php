<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@index', 'as' => 'home'));

//authentication routes
Route::group(array('before' => 'guest'), function()
{
Route::get('register', array('uses' => 'UserController@getRegister', 'as' => 'getRegister'));
Route::get('login', array('uses' => 'UserController@getLogin', 'as' => 'getLogin'));
    Route::group(array('before', 'csrf'), function(){
    Route::post('register', array('uses' => 'UserController@postRegister', 'as' => 'postRegister'));
    Route::get('/admin', array('uses' => 'UserController@getAdmin', 'as' => 'getAdmin'));
    Route::post('/admin', array('uses' => 'UserController@adminRegister', 'as' => 'adminRegister'));
    Route::post('login', array('uses' => 'UserController@postLogin', 'as' => 'postLogin'));
});
});
Route::resource('shop', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::get('checkout', 'UserController@checkout');
Route::get('wishlist', 'UserController@wishlist');
Route::get('contact', 'UserController@contact');
Route::get('product', 'UserController@product');

//Log Viewer
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


//Admin Routes
Route::group(array('before', 'auth'),function() {
    Route::get('admin', array('uses' => 'AdminController@getAdminindex', 'as' => 'getAdminIndex'));
    Route::get('admin/login', array('uses' => 'AdminController@getAdminLogin', 'as' => 'getAdminLogin'));
    Route::get('admin/index', array('uses' => 'AdminController@getAdminIndex', 'as' => 'getAdminIndex'));
});
Route::group(array('before', 'csrf'),function(){
    Route::post('admin', array('uses' => 'AdminController@postAdminLogin', 'as' => 'postAdminLogin'));
});
Route::group(array('before' => 'auth'), function()
{
    Route::get('/admin/logout', array('uses' => 'AdminController@getAdminLogout', 'as' => 'getAdminLogout'));
});


Route::group(array('before' => 'auth'), function()
{
    Route::get('/user/logout', array('uses' => 'UserController@getLogout', 'as' => 'getLogout'));
});

