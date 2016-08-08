<?php

class AccountController extends BaseController
{
    public function getAccount()
    {
        if (!Auth::check()) {
            return Redirect::route('getLogin')->with('fail', 'please login to view your account');
        } else {
            $categories = Category::all();
            $products = Product::all();
            $transactions = Transaction::where('user_id', '=', Auth::user()->id)->get();
            $user = Auth::user();

                    return View::make('users.account')->with('categories', $categories)
                        ->with('products', $products)->with('user', $user)->with('transactions', $transactions);
            }
            }
}