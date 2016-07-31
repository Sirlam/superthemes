<?php

class AdminController extends BaseController
{
    public function getAdmin()
    {
        return View::make('admin.admin');
    }
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
                'address' => 'required'
            ));
        }
        else {
            return Redirect::route('getAdmin')->with('fail','Please enter the correct admin pin')->withInput();
        }
        if($validate->fails())
        {
            return Redirect::route('getRegister')->withErrors($validate)->withInput();
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
                return Redirect::route('getLogin')->with('success', 'you registered sucessfully you can now login');
            }
            else
            {
                return Redirect::route('getLogin')->with('fail', 'an error occured while creating your profile');
            }
        }
    }
}