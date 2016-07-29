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
            if($auth && Auth::user()->isAdmin()){
                return Redirect::to('admin/index');
            }else{
                return Redirect::route('getAdminLogin')->with('fail', 'You are not an admin');
            }
        }
    }

    public function getAdminIndex(){
        return View::make('admin/index');
    }

    public function getAdminLogout() {
        Auth::logout();
        Session::flush();
        return Redirect::route('getAdminLogin');
    }
}