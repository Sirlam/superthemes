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
Route::group(array('before' => 'guest'), function () {
    Route::get('register', array('uses' => 'UserController@getRegister', 'as' => 'getRegister'));
    Route::get('login', array('uses' => 'UserController@getLogin', 'as' => 'getLogin'));
    Route::group(array('before', 'csrf'), function () {
        Route::post('register', array('uses' => 'UserController@postRegister', 'as' => 'postRegister'));
        Route::post('login', array('uses' => 'UserController@postLogin', 'as' => 'postLogin'));
    });
});

Route::resource('shop', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::get('checkout', 'UserController@checkout');
Route::get('wishlist', 'UserController@wishlist');
Route::get('contact', 'UserController@contact');

//Log Viewer
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


//Admin Routes
Route::group(array('before', 'admin'), function () {
    Route::get('admin', array('uses' => 'AdminController@getAdminIndex', 'as' => 'getAdminIndex'));
    Route::group(array('before' => 'auth'), function () {
        Route::get('/admin/logout', array('uses' => 'AdminController@getAdminLogout', 'as' => 'getAdminLogout'));
        Route::group(array('before', 'csrf'), function () {
            Route::post('/admin', array('uses' => 'UserController@adminRegister', 'as' => 'adminRegister'));
            Route::get('admin/index/Register', array('uses' => 'AdminController@getAdmin', 'as' => 'getAdmin'));
        });
    });
});

//cart/wishlist routes
Route::post('/cart', array('uses' => 'CartController@addCart', 'as' => 'addCart'));
Route::get('/cart/index', array('uses' => 'CartController@viewCart', 'as' => 'viewCart'));
Route::post('cart/index', array('uses' => 'CartController@cartRemove', 'as' => 'removeCart'));

//Product routes
Route::get('product/{id}', array('uses' => 'ProductController@getProduct', 'as' => 'getProduct'));
Route::get('product/add', array('uses' => 'ProductController@addProduct', 'as' => 'addProduct'));
Route::group(array('before', 'csrf'), function(){
    Route::post('product/add', array('uses' => 'ProductController@postProduct', 'as' => 'postProduct'));
});

//Dashboard routes
Route::get('dashboard', array('uses' => 'DashboardController@getDashboard', 'as' => 'getDashboard'));

//User Logout
Route::group(array('before' => 'auth'), function () {

    Route::get('/user/logout', array('uses' => 'UserController@getLogout', 'as' => 'getLogout'));
});


