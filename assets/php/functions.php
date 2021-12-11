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

    function edit($data){
        global $koneksi;

        $id_game = $data["id_game"];
        $nama_game = htmlspecialchars($data["nama_game"]);
        $harga = htmlspecialchars($data["harga"]);
        $tanggal_rilis = htmlspecialchars($data["tanggal_rilis"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);
        //$kategori = $data["kategori"];

        $result = mysqli_query($koneksi, "UPDATE games SET
                                                id_game = '$id_game',
                                                name = '$nama_game',
                                                harga = '$harga',
                                                deskripsi = '$deskripsi',
                                                tanggal_rilis = '$tanggal_rilis',
                                                gambar = '$gambar'
                                                WHERE id_game = $id_game");

        mysqli_query($koneksi, "DELETE FROM kategori_games WHERE id_game = $id_game");

        foreach($kategori as $isi){
            mysqli_query($koneksi, "INSERT INTO kategori_games VALUES('$id_game', '$isi')");
        }

        return mysqli_affected_rows($koneksi);
    }

    function registrasi($data){
        global $koneksi;
        $username = strtolower(stripslashes((htmlspecialchars($data["username"]))));
        $password = mysqli_escape_string($koneksi, $data["password"]);
        $konfirmasi_password = mysqli_escape_string($koneksi, $data["password2"]);

        $nama = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");

        if(mysqli_num_rows($nama) == 1){
            echo "<script>
            alert('namanya udah pernah digunakan nih');
            document.location.href = '/gamestore/index.php';
            </script>";
            return false;
        }

        if ($konfirmasi_password != $password){
            echo "<script>
            alert('konfirmasi passwordnya beda nih');
            document.location.href = '/gamestore/index.php';
            </script>";
            return false;
        }
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($koneksi, "INSERT INTO users VALUE ('', '$username', '$password', '')");
            return mysqli_affected_rows($koneksi);
    }

    function login($data){
            global $koneksi;
            $username = $data["username"];
            $password = $data["password"];

            $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

            if( mysqli_num_rows($result) === 1 ) {
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row["password"])) {
                    $_SESSION["id_user"] = $row["id_user"];
                    $_SESSION["username"] = $row["username"];
                    header("location:/gamestore/index.php");
                    return false;
                }
            }
            return true;
    }
?>
