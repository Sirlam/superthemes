<?php
class CartController extends BaseController
{
    public function store(Request $request)
    {
        Cart::associate('Product','App')->add($request->id, $request->name, 1, $request->price);
        return redirect('cart')->withSuccessMessage('Item was added to your cart!');
    }
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }
}