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
            $count = Account::where('user_id', '=', $user->id)->count();
            $accounts = Account::where('user_id', '=', $user->id)->get();
            $balance = 0;
            foreach($accounts as $account) {
                foreach ($products as $product) {
                    if ($product->id == $account->product_id) {
                        $balance = $balance + $product->new_price;

                    }
                }
            }
           $cBalance = $balance * 0.9;
                    return View::make('users.account')->with('categories', $categories)
                        ->with('products', $products)->with('user', $user)->with('transactions', $transactions)->with('count', $count)->with('cbalance', $cBalance);
            }
            }
}