<?php

class ProductController extends BaseController
{
    public function addProduct()
    {

    }

    public function getProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $users = User::all();
        return View::make('product')
            ->with('product', $product)
            ->with('categories', $categories)
            ->with('users', $users);
    }
}