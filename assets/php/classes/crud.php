<?php 

class CRUD extends DB{
    public function getFriends($currentUser){
        $sql = "SELECT * FROM users INNER JOIN friends ON users.id_user = friends.id_user_2 WHERE friends.id_user_1 = :currentUser";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':currentUser'=>$currentUser));
        return $stmt;
    }
}