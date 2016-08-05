<?php

class AccountController extends BaseController
{
    public function getAccount(){
        $categories = Category::all();
        $products = Product::all();
        $user = Auth::user();
        return View::make('users.account')->with('categories', $categories)
            ->with('products', $products)->with('user', $user);
    }

}