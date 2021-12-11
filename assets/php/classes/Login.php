<?php

class Login extends DB{
    protected function getUser($username, $password)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ?');
        
        if (!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: /Gamestore/views/login.php?error=stmtfailedwoy");
            exit();
        }
      
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: /Gamestore/views/login.php?error=usernotfound");
            exit();
        }

        $passwordHash = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHash[0]["password"]);

        if ($checkPassword == false) {
            $stmt = null;
            header("location: /Gamestore/views/login.php?error=wrongpassword");
            exit();
        }elseif($checkPassword == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ?;');
            
            if (!$stmt->execute(array($username))) {
                $stmt = null;
                header("location: /Gamestore/views/login.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: /Gamestore/views/login.php?error=usernotfoundbro");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["id_user"] = $user[0]["id_user"];
            $_SESSION["username"] = $user[0]["username"];
            $stmt = null;
        }
        
    }
}