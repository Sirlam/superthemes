<?php

class DashboardController extends BaseController
{
    public function getDashboard()
    {
        $categories = Category::all();
        $products = Product::all();
        $users = User::all();
        return View::make('users.dashboard')->with('categories', $categories)
            ->with('products', $products)->with('users', $users);
    }

}