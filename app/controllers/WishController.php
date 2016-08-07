<?php

class WishController extends BaseController
{
    public function postWishlist($id)
    {
        if (!Auth::check()) {
            return Redirect::route('getLogin')->with('failure', 'please login to add items to your wishlist, or register if you don\'t have an account');
        } else {
            $product = Product::find($id);
            if (!Wishlist::where('product_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first()) {
                $wishlist = New Wishlist();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product->id;
                $wishlist->save();
                return Redirect::route('home')->with('success', 'product added to wishlist successfully');
            } else {
                return Redirect::route('home')->with('fail', 'That item is already in your wishlist');
            }
        }
    }

    public function getWishlist()
    {
        if (!Auth::check()) {
            return Redirect::route('getLogin')->with('fail', 'Please login to access your wishlist, or kindly register if you don\'t have an account');
        }
        $users = User::all();
        $products = Product::all();
        $categories = Category::all();
        $id = Auth::user()->id;
        $wishlists = Wishlist::where('user_id', '=', $id)->get();
        return View::make('users.wishlist')->with('products', $products)->with('wishlists', $wishlists)->with('categories', $categories)->with('users', $users);


    }

    public function deleteWishlist($id)
    {
        Wishlist::where('product_id', '=', $id)->where('user_id', '=', Auth::user()->id)->delete();
        return Redirect::route('getWishlist')->with('sucess', 'wishlist item deleted successfully');
    }
}