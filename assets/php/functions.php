<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'game_store');

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function insert($data){
        global $koneksi;
        $nama_game = htmlspecialchars($data["nama_game"]);
        $harga = htmlspecialchars($data["harga"]);
        $tanggal_rilis = htmlspecialchars($data["tanggal_rilis"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);
        $result = mysqli_query($koneksi, "INSERT INTO games VALUES('', '$nama_game', '$harga', '$deskripsi', '$tanggal_rilis', '$gambar')");

        $id_game = 0;
        $hasil = mysqli_query($koneksi, "SELECT id_game FROM games ORDER BY id_game DESC LIMIT 1");
        $row = mysqli_fetch_assoc($hasil);
        foreach($row as $isi){
            $id_game = $isi;
        }

        $kategori = $data["kategori"];

        foreach($kategori as $isi){
            mysqli_query($koneksi, "INSERT INTO kategori_games VALUES('$id_game', '$isi')");
        }
        return mysqli_affected_rows($koneksi);
    }

    function delete($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM kategori_games WHERE id_game = '$id'");
        mysqli_query($koneksi, "DELETE FROM publisher_game WHERE id_game = '$id'");
        mysqli_query($koneksi, "DELETE FROM games WHERE id_game = '$id'");
        return mysqli_affected_rows($koneksi);
    }
?>
