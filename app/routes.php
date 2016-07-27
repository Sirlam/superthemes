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
    Route::post('login', array('uses' => 'UserController@postLogin', 'as' => 'postLogin'));
});
});

Route::get('checkout', 'UserController@checkout');
Route::get('wishlist', 'UserController@wishlist');
Route::get('contact', 'UserController@contact');
Route::get('product', 'UserController@product');