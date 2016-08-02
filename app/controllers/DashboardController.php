<?php

class DashboardController extends BaseController
{
    public function getDashboard(){
        $categories = Category::all();
        return View::make('users.dashboard')->with('categories', $categories);
    }

}