<?php

class SignupController extends Signup{
    private $username;
    private $password;
    private $passwordConfirm;

    public function __construct($username, $password, $passwordConfirm)
    {
        $this->password = $password;
        $this->username = $username;
        $this->passwordConfirm = $passwordConfirm;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            //empty input
            header("location: /Gamestore/views/signup.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUsername() == false) {
            //invalid username
            header("location: /Gamestore/views/signup.php?error=invalidusername");
            exit();
        }

        $this->setUser($this->username, $this->password);
    }

    private function emptyInput(){
        $result = "";
        if(empty($this->username) || empty($this->password) || empty($this->passwordConfirm)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUsername(){
        $result = "";
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result = "";
        if ($this->password !== $this->passwordConfirm) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function usernameTaken()
    {
        $result = "";
        if (!$this->checkUser($this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}