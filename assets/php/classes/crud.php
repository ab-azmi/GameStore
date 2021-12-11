<?php 

class CRUD extends DB{
    
    public function getFriends($currentUser){
        $sql = "SELECT * FROM users INNER JOIN friends ON users.id_user = friends.id_user_2 WHERE friends.id_user_1 = :currentUser";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':currentUser'=>$currentUser));
        return $stmt;
    }

    public function getKeranjang($currentUser)
    {
        $sql = "SELECT * FROM games INNER JOIN keranjang ON games.id_game = keranjang.id_game INNER JOIN users ON keranjang.id_user = users.id_user WHERE keranjang.id_user = :currentUser AND users.id_user = :currentUser";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':currentUser'=>$currentUser));
        return $stmt;
    }

    public function getKategori($game)
    {
        $sql = "SELECT kategori.kategori FROM((kategori_games INNER JOIN games ON kategori_games.id_game = games.id_game) 
                INNER JOIN kategori ON kategori_games.id_kategori = kategori.id_kategori) WHERE games.id_game = :game";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':game' => $game));
        return $stmt;
    }

    public function getDataAdmin(){
        $sql = "SELECT
                    publishers.id_publisher,
                    publishers.nama_publisher,
                    games.id_game,
                    games.name,
                    games.harga,
                    games.deskripsi,
                    games.tanggal_rilis,
                    games.gambar
                FROM
                    ((publisher_game INNER JOIN publishers ON publisher_game.id_publisher = publishers.id_publisher) 
                    INNER JOIN games ON publisher_game.id_game = games.id_game)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    
}