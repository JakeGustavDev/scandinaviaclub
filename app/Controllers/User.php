<?php

namespace App\Controllers;

class User extends BaseController
{
    private $userModel;

    public function __construct(){
        $this->userModel = model('UserModel');
    }

    public function login($error = ''){
        return view('pages/login', ['error' => $error]);
    }

    public function main(){
        return view('pages/main');
    }

    public function validate_user(){
        $user = $this->userModel->where('user',$_POST['user'])->findAll();
        if(count($user) > 0){
            if(password_verify($_POST['password'],$user[0]['password'])){
                $this->session->id = $user[0]['id'];
                $this->session->user = $user[0]['user'];
                $this->session->fullname = $user[0]['fullname'];
                $this->session->type = $user[0]['type'];
                return redirect()->to('/user/main');
            }else{
                return redirect()->to('/login/notmach');
            }
        }else{
            return redirect()->to('/login/notmach');
        }
    }

    public function create_user(){
        $this->userModel->insert([
            "user" => "jakegustav",
            "fullname" => "Gustavo Adolfo Jaque Rivas",
            "password" => password_hash("tabo5732991", PASSWORD_BCRYPT, ["cost" => 10]),
            "type" => 1,
            "created_by" => 1,
        ]);
    }

    public function lockerRec(){
        return view('pages/lockerRec');
    }
    
    public function lockerBar(){
        return view('pages/lockerBar');
    }

    public function lockerAdmin(){
        return view('pages/lockerAdmin');
    }
}
