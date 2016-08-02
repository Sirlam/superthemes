<?php

class ProductController extends BaseController
{
    public function postProduct()
    {
        $validate = Validator::make(Input::all(), array(
            'title' => 'required|min:4',
            'description' => 'required|min:20',
            'old_price' => 'numeric',
            'new_price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,jpg,bmp,gif,png',
            'file' => 'required|mimes:zip,rar',
        ));
        if($validate->fails())
        {
            return Redirect::route('getDashboard')->withErrors($validate)->withInput();
        }
        else
        {
            $Product = new Product();
            $Product->category_id = Input::get('category_id');
            $Product->user_id = Auth::id();
            $Product->title = Input::get('title');
            $Product->description = Input::get('description');
            $Product->old_price = Input::get('old_price');
            $Product->new_price = Input::get('new_price');

            $image = Input::file('image');
            $imagename = time()."-".$image->getClientOriginalName();
            Image::make($image->getRealPath())->resize(468,249)->save(public_path().'/products/img/'.$imagename);
            $Product->image = 'products/img/'.$imagename;

            $file = Input::file('file');
            $filename = time()."-".$file->getClientOriginalName();
            $file->move(public_path().'/products/file/'.$filename, $filename);
            $Product->upload_link = 'products/file/'.$filename;

            $Product->save();
            if($Product->save())
            {
                return Redirect::route('getDashboard')
                    ->with('success', 'Theme added successfully');
            }
            else
            {
                return Redirect::route('getDashboard')
                    ->with('fail', 'An error occurred while adding theme')
                    ->withErrors($validate)
                    ->withInput();
            }
        }
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