<?php

class UserController extends BaseController
{
    public function getRegister()
    {
        return View::make('users.register');
    }

    public function getLogin()
    {
        return View::make('users.login');
    }

    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return Redirect::route('home');
    }

    public function postRegister()
    {
        $validate = Validator::make(Input::all(), array(
            'firstname' => 'required|min:4',
            'lastname' => 'required|min:4',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'email' => 'required|unique:users|min:10',
            'phone' => 'required|min:8',
        ));
        if ($validate->fails()) {
            return Redirect::route('getRegister')->withErrors($validate)->withInput();
        } else {
            $user = new User();
            $user->lastname = Input::get('lastname');
            $user->firstname = Input::get('firstname');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->isSeller = Input::get('user_type');
            $user->phone_number = Input::get('phone');
            $user->address = Input::get('address');

            if ($user->save()) {
                return Redirect::route('getLogin')->with('success', 'you registered successfully you can now login');
            } else {
                return Redirect::route('getLogin')->with('fail', 'an error occurred while creating your profile');
            }
        }
    }

    public function postLogin()
    {
        $validator = Validator::make(Input::all(), array(
            'email' => 'required|email',
            'password' => 'required'
        ));
        if ($validator->fails()) {
            return Redirect::route('getLogin')->withErrors($validator)->withInput();
        } else {
            $remember = (Input::has('remember')) ? true : false;
            $auth = Auth::attempt(array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            ), $remember);
            if ($auth) {
                return Redirect::intended('/');
            } else {
                return Redirect::route('getLogin')->with('fail', 'You entered the wrong username or password');
            }
        }
    }

    public function adminRegister()
    {
        $check = Input::get('admin_pin');
        if ($check === 'admin') {
            $validate = Validator::make(Input::all(), array(
                'firstname' => 'required|min:4',
                'lastname' => 'required|min:4',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password',
                'email' => 'required|unique:users|min:10',
                'phone' => 'required|min:8'
            ));
        } else {
            return Redirect::route('getAdmin')->with('fail', 'Please enter the correct admin pin')->withInput();
        }
        if ($validate->fails()) {
            return Redirect::route('getRegister')->withErrors($validate)->withInput();
        } else {
            $user = new User();
            $user->lastname = Input::get('lastname');
            $user->firstname = Input::get('firstname');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->phone_number = Input::get('phone');
            $user->address = Input::get('address');
            $user->isAdmin = 1;

            if ($user->save()) {
                return Redirect::route('getLogin')->with('success', 'you registered successfully you can now login');
            } else {
                return Redirect::route('getLogin')->with('fail', 'an error occurred while creating your profile');
            }
        }
    }

    public function checkout()
    {
        if (!Auth::check()) {
            return Redirect::route('getLogin')->with('failure', 'please login to checkout');
        } else {
            return View::make('users.checkout');
        }
    }

    public function contact()
    {
        return View::make('contact');
    }

    public function sendMail()
    {
        $validate = Validator::make(Input::all(), array(
            'firstname' => 'required|min:4',
            'email' => 'required|min:4',
            'message' => 'required|min:6',
        ));

        if ($validate->passes()) {
            Mail::send('contact', array('firstname'=>Input::get('firstname')), function($message){
                $message->to('info@superthemes.com', Input::get('firstname')->subject('You received a mail'));
            });
            return Redirect::to('contact')->with('message', 'Your message has been received. We will get back to you shortly')
                ->withErrors($validate)->withInput();
        }else{
            return Redirect::to('contact')->with('message', 'An error occurred')
                ->withErrors($validate)->withInput();
        }
    }

    public function updateUser()
    {
        $validate = Validator::make(Input::all(), array(
            'firstname' => 'required|min:4',
            'lastname' => 'required|min:4',
            'phone' => 'required|min:8',
        ));
        if ($validate->fails()) {
            return Redirect::route('getAccount')->withErrors($validate)->withInput();
        } else {
            $user = Auth::user();
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->phone_number = Input::get('phone');
            $user->address = Input::get('address');
            $user->update();

            if ($user->update()) {
                return Redirect::route('getAccount')->with('success', 'Your profile has been successfully updated');
            } else {
                return Redirect::route('getAccount')->with('fail', 'An error occurred while updating your profile');
            }
        }
    }
}