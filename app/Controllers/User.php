<?php

namespace App\Controllers;

class User extends BaseController
{
    private $userModel;

    public function __construct(){
        $this->userModel = model('UserModel');
    }

    public function login(){
        return view('pages/login');
    }

    public function main(){
        return view('pages/main');
    }
    public function lockerRec()
    {
        return view('pages/lockerRec');
    }
    public function lockerBar()
    {
        return view('pages/lockerBar');
    }
    public function lockerAdmin()
    {
        return view('pages/lockerAdmin');
    }
}
