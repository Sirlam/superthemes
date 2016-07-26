<?php

class UsersController extends BaseController
{
    public function register()
    {
        return View::make('users.register');
    }
}