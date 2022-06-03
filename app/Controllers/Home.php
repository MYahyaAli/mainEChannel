<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing');
    }

    public function home()
    {
        return view ('Home');
    }

    public function contact()
    {
        return view ('ContactUs');
    }

    public function about()
    {
        return view ('AboutUs');
    }
}
