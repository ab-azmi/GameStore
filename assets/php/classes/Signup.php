<?php

class Signup extends DB{

    protected function setUser($username, $password){
        $stmt = $this->connect()->prepare('INSERT INTO users (username, password) VALUES (?, ?);');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($username, $hashedPassword))) {
            $stmt = null;
            header("location: /Gamestore/views/signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($username){
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ?;');
        
        if(!$stmt->execute(array($username))){
            $stmt = null;
            header("location: /Gamestore/views/signup.php?error=stmtfailed");
            exit();
        }

        $resultCheck = "";
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}