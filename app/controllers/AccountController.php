<?php

class AccountController extends BaseController
{
    public function getAccount(){
        $categories = Category::all();
        $products = Product::all();
        $users = User::all();
        return View::make('users.account')->with('categories', $categories)
            ->with('products', $products)->with('users', $users);
    }

}