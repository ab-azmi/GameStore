<?php

class LoginController extends Login{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->password = $password;
        $this->username = $username;
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            //empty input
            header("location: /Gamestore/views/signup.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->username, $this->password);
    }

    private function emptyInput(){
        $result = "";
        if(empty($this->username) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}