<?php

class AdminController extends BaseController
{
    public function productReview()
    {
        $users = User::all();
        $categories = Category::all();
        return View::make('admin.productreview')
            ->with('users', $users)
            ->with('categories', $categories)
            ->with('products' , Product::where('isFeatured' , '=' , 1)->paginate(6))
            ->with('prods' , Product::where('isFeatured' , '=' , 0)->paginate(6));
    }
    public function featureProduct($id)
    {
        $product = product::find($id);
        $product->isFeatured = 1;
        $product->save();
        return Redirect::route('productReview')->with('success', 'Product featured successfully');
    }
    public function unfeatureProduct($id)
    {
        $product = product::find($id);
        $product->isFeatured = 0;
        $product->save();
        return Redirect::route('productReview')->with('success', 'Product unfeatured successfully');
    }
    public function productDelete($id)
    {
        Product::find($id)->delete();
        return Redirect::route('productReview')->with('success', 'Product deleted successfully');
    }
    public function getAdmin()
    {

        return View::make('admin.admin');
    }

    public function getAdminIndex(){
        return View::make('admin/index');
    }

    public function getAdminLogout() {
        Auth::logout();
        Session::flush();
        return Redirect::route('home');
    }

    public function adminRegister(){
        $check = Input::get('admin_pin');
        if ($check === 'admin') {
            $validate = Validator::make(Input::all(), array(
                'firstname' => 'required|min:4',
                'lastname' => 'required|min:4',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password',
                'email' => 'required|unique:users|min:10',
                'phone' => 'required|min:8',
            ));
        }
        else {
            return Redirect::route('getAdmin')->with('fail','Please enter the correct admin pin')->withInput();
        }
        if($validate->fails())
        {
            return Redirect::route('getAdmin')->withErrors($validate)->withInput();
        }
        else
        {
            $user = new User();
            $user->lastname = Input::get('lastname');
            $user->firstname = Input::get('firstname');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->phone_number = Input::get('phone');
            $user->address = Input::get('address');
            $user->isAdmin = 1;



            if($user->save())
            {
                return Redirect::route('home')->with('success', 'you registered sucessfully you can now login');
            }
            else
            {
                return Redirect::route('getAdmin')->with('fail', 'an error occured while creating your profile');
            }
        }
    }

}