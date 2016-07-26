<?php

class UsersController extends BaseController
{
    public function register()
    {
        return View::make('users.register');
    }

    public function checkout(){
        return View::make('users.checkout');
    }

    public function login(){
        return View::make('users.login');
    }
}