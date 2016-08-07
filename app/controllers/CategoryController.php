<?php

class CategoryController extends BaseController
{

    public function index($cat_id)
    {
        $cat = Category::find($cat_id);
        $prods = Product::all();
        $categories = Category::all();
        $users = User::all();
        $best_seller = DB::table('products')->where('sold', DB::raw("(select max(`sold`) from products)"))->get();
        $best_offer = DB::table('products')->where('new_price', DB::raw("(select min(`new_price`) from products)"))->get();
        return View::make('users.category')
            ->with('products', Product::where('category_id', '=', $cat_id)->paginate(6))
            ->with('categories', $categories)
            ->with('users', $users)
            ->with('prods', $prods)
            ->with('cat', $cat)
            ->with('best_seller', $best_seller)
            ->with('best_offer', $best_offer);
    }
}
