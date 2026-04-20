<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('v_login');
    }
}