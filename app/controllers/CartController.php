<?php

class CartController extends BaseController
{
    public function addCart()
    {
        $products = Product::find(Input::get('product_id'));
        $category = Category::find(Input::get('category_id'));
        foreach (Cart::content() as $item){
         if ($item->product->id = $products->id)
         {
             return Redirect::back()->with('fail', 'item is already in your cart');
         }
        }
        Cart::associate('Product')->add(array('id' => $products->id, 'name' => $category->name, 'qty' => 1, 'price' => $products->new_price,));
        return Redirect::route('home')->with('success', 'Item was added to your cart!');
    }

    public function viewCart()
    {
        $products = Product::all();
        $categories = Category::all();
        return View::make('cart');
    }

    public function cartRemove()
    {
        $rowId = Input::get('product_id');
        Cart::remove($rowId);
        return Redirect::route('viewCart')->withSuccessMessage('Item has been removed!');
    }
}