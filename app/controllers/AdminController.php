<?php

class AdminController extends BaseController
{
    public function getAdminLogin()
    {
        return View::make('admin.login');
    }

    public function postAdminLogin()
    {
        $validator = Validator::make(Input::all(), array(
            'email' => 'required|email',
            'password' => 'required'
        ));
        if ($validator->fails()) {
            return Redirect::route('getAdminLogin')->withErrors($validator)->withInput();
        } else {
            $remember = (Input::has('remember')) ? true : false;
            $auth = Auth::attempt(array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            ), $remember);
            if($auth){
                return Redirect::intended('/');
            }else{
                return Redirect::route('getAdminLogin')->with('fail', 'Invalid username and password');
            }
        }
    }
}