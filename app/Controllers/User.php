<?php

namespace App\Controllers;

class User extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }
    public function main()
    {
        return view('pages/main');
    }
}
