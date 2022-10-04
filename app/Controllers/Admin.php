<?php

namespace App\Controllers;

class Admin extends BaseController
{
    private $userModel;
    private $lockerModel;

    public function __construct(){
        $this->userModel = model('UserModel');
        $this->lockerModel = model('LockerModel');
    }

    public function admin(){
        return view('pages/admin');
    }

    public function lockerAdmin(){
        return view('pages/lockerAdmin');
    }
}
