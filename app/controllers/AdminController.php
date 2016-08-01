<?php

class AdminController extends BaseController
{
    public function getAdmin()
    {
        return View::make('admin/admin');
    }

    public function getAdminIndex(){
        return View::make('admin/index');
    }

    public function getAdminLogout() {
        Auth::logout();
        Session::flush();
        return Redirect::route('home');
    }

}