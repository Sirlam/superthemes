<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $users = User::all();
        $best_seller = DB::table('products')->where('sold', DB::raw("(select max(`sold`) from products)"))->get();
        $best_offer = DB::table('products')->where('new_price', DB::raw("(select min(`new_price`) from products)"))->get();
        return View::make('home')->with('products', $products)->with('categories', $categories)
            ->with('users', $users)->with('best_seller', $best_seller)->with('best_offer', $best_offer);
    }
}