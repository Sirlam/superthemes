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

//contact and blog
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
//Route::get('admin', array('uses' => 'AdminController@getAdminindex', 'as' => 'getAdminIndex'));
//Route::get('admin/login', array('uses' => 'AdminController@getAdminLogin', 'as' => 'getAdminLogin'));
//Route::get('admin/index', array('uses' => 'AdminController@getAdminIndex', 'as' => 'getAdminIndex'));
//Route::get('admin/index/Register', array('uses' => 'AdminController@getAdmin', 'as' => 'getAdmin'));
//Route::group(array('before', 'csrf'), function () {
    //Route::post('admin/index/Register', array('uses' => 'AdminController@adminRegister', 'as' => 'adminRegister'));
    // Route::post('admin', array('uses' => 'AdminController@postAdminLogin', 'as' => 'postAdminLogin'));
//});

//Remind routes
Route::get('remind', array('uses' => 'RemindersController@getRemind', 'as' => 'getRemind'));
Route::post('remind', array('uses' => 'RemindersController@postRemind', 'as' => 'postRemind'));
Route::get('reset/{token}', array('uses' => 'RemindersController@getReset', 'as' => 'getReset'));
Route::post('reset/{token}', array('uses' => 'RemindersController@postReset', 'as' => 'postReset'));



//cart/wishlist routes
Route::post('/cart', array('uses' => 'CartController@addCart', 'as' => 'addCart'));
Route::get('/cart/index', array('uses' => 'CartController@viewCart', 'as' => 'viewCart'));
Route::post('cart/index', array('uses' => 'CartController@cartRemove', 'as' => 'removeCart'));
Route::get('wishlist/index', array('uses' => 'WishController@getWishlist', 'as' => 'getWishlist'));
Route::get('wishlist/add/{id}', array('uses' => 'WishController@postWishlist', 'as' => 'postWishlist'));
Route::get('wishlist/delete/{id}', array('uses' => 'WishController@deleteWishlist', 'as' => 'deleteWishlist'));


Route::group(array('before', 'admin'), function () {
    Route::get('admin', array('uses' => 'AdminController@getAdminIndex', 'as' => 'getAdminIndex'));
    Route::group(array('before' => 'auth'), function () {
        Route::get('admin/products/delete/{id}', array('uses' => 'AdminController@productDelete', 'as' => 'productDelete'));
        Route::get('admin/products/review', array('uses' => 'AdminController@productReview', 'as' => 'productReview'));
        Route::get('/admin/products/feature/{id}', array('uses' => 'AdminController@featureProduct', 'as' => 'featureProduct'));
        Route::get('/admin/products/unfeature/{id}', array('uses' => 'AdminController@unfeatureProduct', 'as' => 'unfeatureProduct'));
        Route::get('admin/index/Register', array('uses' => 'AdminController@getAdmin', 'as' => 'getAdmin'));
        Route::get('/admin/logout', array('uses' => 'AdminController@getAdminLogout', 'as' => 'getAdminLogout'));
        Route::group(array('before', 'csrf'), function () {
            Route::post('/admin', array('uses' => 'UserController@adminRegister', 'as' => 'adminRegister'));
        });
    });
});


/*Route::group(array('before' => 'auth'), function()
{
    Route::get('/admin/logout', array('uses' => 'AdminController@getAdminLogout', 'as' => 'getAdminLogout'));
});*/
Route::group(array('before' => 'auth'), function () {
//Product routes
    Route::get('product/{id}', array('uses' => 'ProductController@getProduct', 'as' => 'getProduct'));
    Route::get('product/delete/{id}', array('uses' => 'ProductController@deleteProduct', 'as' => 'deleteProduct'));
    Route::get('product/add', array('uses' => 'ProductController@addProduct', 'as' => 'addProduct'));
    Route::group(array('before', 'csrf'), function () {
        Route::post('product/add', array('uses' => 'ProductController@postProduct', 'as' => 'postProduct'));
    });
});

//Dashboard routes
Route::get('dashboard', array('uses' => 'DashboardController@getDashboard', 'as' => 'getDashboard'));

//User Logout
Route::group(array('before' => 'auth'), function () {
    Route::get('/user/logout', array('uses' => 'UserController@getLogout', 'as' => 'getLogout'));
});


