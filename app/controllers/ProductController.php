<?php

class ProductController extends BaseController
{
    public function addProduct()
    {

    }

    public function getProduct()
    {
        $products = Product::all();
        $categories = Category::all();
        $users = User::all();
        return View::make('product')
            ->with('products', $products)
            ->with('categories', $categories)
            ->with('users', $users);
    }
}