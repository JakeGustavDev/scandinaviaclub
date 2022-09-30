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

    public function validate_user(){
        $user = $this->userModel->where('user',$_POST['user'])->findAll();
        if(count($user) > 0){
            if(password_verify($_POST['password'],$user[0]['password'])){
                
            }else{
                redirect()->to('/login/notmach');
            }
        }else{
            redirect()->to('/login/notmach');
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
}
