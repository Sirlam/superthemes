<?php
class CartController extends BaseController
{
    public function addCart()
    {
       /* $id = Input::get('product_id');
        $name = Input::get('product_name');
        $price = Input::get('product_price');*/
        $products = Product::find(Input::get('product_id'));
        $category = Category::find(Input::get('category_id'));
        Cart::associate('Product')->add(array('id' => $products->id, 'name' => $category->name, 'qty' => 1, 'price' => $products->new_price,));
        return Redirect::route('home')->with('success','Item was added to your cart!');
    }
    public function viewCart() {
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