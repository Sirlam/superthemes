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


//Category routes
Route::get('category/{cat_id}', array('uses' => 'CategoryController@index', 'as' => 'categoryIndex'));

//Checkout routes
Route::get('checkout', array('uses' => 'UserController@checkout', 'as' => 'firstCheckout'));

//Other Routes
Route::resource('shop', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::get('wishlist', 'UserController@wishlist');
Route::get('contact', 'UserController@contact');

//Log Viewer
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//Admin routes
Route::get('admin/index/Register', array('uses' => 'AdminController@getAdmin', 'as' => 'getAdmin'));
Route::group(array('before', 'csrf'), function () {
    Route::post('admin/index/Register', array('uses' => 'AdminController@adminRegister', 'as' => 'adminRegister'));
    // Route::post('admin', array('uses' => 'AdminController@postAdminLogin', 'as' => 'postAdminLogin'));
});
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
Route::get('wishlist/index', array('uses' => 'WishController@getWishlist', 'as' => 'getWishlist'));
Route::get('wishlist/add/{id}', array('uses' => 'WishController@postWishlist', 'as' => 'postWishlist'));

//Product routes
Route::group(array('before' => 'auth'), function () {
    Route::get('product/{id}', array('uses' => 'ProductController@getProduct', 'as' => 'getProduct'));
    Route::get('product/delete/{id}', array('uses' => 'ProductController@deleteProduct', 'as' => 'deleteProduct'));
    Route::get('product/add', array('uses' => 'ProductController@addProduct', 'as' => 'addProduct'));
    Route::group(array('before', 'csrf'), function () {
        Route::post('product/add', array('uses' => 'ProductController@postProduct', 'as' => 'postProduct'));
    });
});

//Dashboard routes
Route::get('dashboard', array('uses' => 'DashboardController@getDashboard', 'as' => 'getDashboard'));

//Account routes
Route::get('account', array('uses' => 'AccountController@getAccount', 'as' => 'getAccount'));
Route::post('account', array('uses' => 'UserController@updateUser', 'as' => 'updateUser'));

//User Logout
Route::group(array('before' => 'auth'), function () {
    Route::get('/user/logout', array('uses' => 'UserController@getLogout', 'as' => 'getLogout'));
});


