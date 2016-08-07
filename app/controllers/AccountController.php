<?php

class AccountController extends BaseController
{
    public function getAccount()
    {
        if (!Auth::check()) {
            return Redirect::route('getLogin')->with('fail', 'please login to view your account');
        } else {
            $categories = Category::all();
            $products = DB::table('products as p')->where('id', DB::raw("(select product_id from transactions as t WHERE p.id = t.product_id)"))->get();
            $transactions = Transaction::all();
            $user = Auth::user();
            return View::make('users.account')->with('categories', $categories)
                ->with('products', $products)->with('user', $user)->with('transactions', $transactions);
        }
    }

}