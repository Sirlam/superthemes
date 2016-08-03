<?php
class CategoryController extends BaseController
{

    public function index($cat_id)
    {
        $cat = Category::find($cat_id);
        $prods = Product::all();
        $categories = Category::all();
        $users = User::all();
        return View::make('users.category')
            ->with('products' , Product::where('category_id' , '=' , $cat_id)->paginate(6))
            ->with('categories', $categories)
            ->with('users', $users)
            ->with('prods', $prods)
            ->with('cat', $cat);
    }
}
