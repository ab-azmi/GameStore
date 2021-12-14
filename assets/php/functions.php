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

        $username_publisher = $_SESSION["username"];

        
        if(!mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM publishers WHERE nama_publisher = '$username_publisher'"))){
            mysqli_query($koneksi, "INSERT INTO publishers VALUES ('', '$username_publisher')");
        }

        $nama_game = htmlspecialchars($data["nama_game"]);
        $harga = htmlspecialchars($data["harga"]);
        $tanggal_rilis = htmlspecialchars($data["tanggal_rilis"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);
        
        mysqli_query($koneksi, "INSERT INTO games VALUES('', '$nama_game', '$harga', '$deskripsi', '$tanggal_rilis', '$gambar')");

        $id_game = 0;
        $hasil = mysqli_query($koneksi, "SELECT id_game FROM games ORDER BY id_game DESC LIMIT 1");
        $row = mysqli_fetch_assoc($hasil);
        foreach($row as $isi){
            $id_game = $isi;
        }

        $result = query("SELECT id_publisher FROM publishers WHERE nama_publisher = '$username_publisher'")[0];
        $id_publisher = $result["id_publisher"];

        mysqli_query($koneksi, "INSERT INTO publisher_game VALUES ('$id_publisher', '$id_game')");

        $kategori = $data["kategori"];

        foreach($kategori as $isi){
            mysqli_query($koneksi, "INSERT INTO kategori_games VALUES('$id_game', '$isi')");
        }
        return mysqli_affected_rows($koneksi);
    }

    function delete($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM koleksi WHERE id_game = '$id'");
        mysqli_query($koneksi, "DELETE FROM tagihan WHERE id_game = '$id'");
        mysqli_query($koneksi, "DELETE FROM keranjang WHERE id_game = '$id'");
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

        $result = mysqli_query($koneksi, "UPDATE `games` SET 
                                                id_game='$id_game',
                                                name='$nama_game',
                                                harga='$harga',
                                                deskripsi='$deskripsi',
                                                tanggal_rilis='$tanggal_rilis',
                                                gambar='$gambar' 
                                                WHERE id_game = '$id_game'");
        if (isset($data["kategori"])){
            $kategori = $data["kategori"];
            mysqli_query($koneksi, "DELETE FROM kategori_games WHERE id_game = $id_game");

            foreach($kategori as $isi){
                mysqli_query($koneksi, "INSERT INTO kategori_games VALUES('$id_game', '$isi')");
            }
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

    function tambahKeranjang($id_game, $id_user){
        global $koneksi;
        $id_game_ada = mysqli_query($koneksi, "SELECT * FROM keranjang WHERE id_game = '$id_game' AND id_user = '$id_user'");
        if(!mysqli_num_rows($id_game_ada) == 1){
            mysqli_query($koneksi, "INSERT INTO keranjang VALUES ('$id_game', '$id_user')");
        }
    }

    function hapusKeranjang($id_game, $id_user){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM keranjang WHERE id_game = '$id_game' AND id_user = '$id_user'");
    }

    function tambahTagihan($id_game, $harga, $id_user){
        global $koneksi;

        $result = mysqli_query($koneksi, "SELECT * FROM tagihan WHERE id_game = '$id_game' AND id_user = '$id_user'");
        if(!mysqli_num_rows($result) == 1){
            mysqli_query($koneksi, "INSERT INTO tagihan VALUES ('', '$id_game', '$harga', '$id_user')");
        }
    }
    function tambahKoleksi($id_user){
        global $koneksi;
        $tagihan = query("SELECT id_game FROM tagihan WHERE id_user = '$id_user'");
        foreach($tagihan as $row){
            $id_game = $row["id_game"];
            mysqli_query($koneksi, "INSERT INTO koleksi VALUES ('$id_user', '$id_game', '30', '1')");
            mysqli_query($koneksi, "DELETE FROM keranjang WHERE id_game = '$id_game' AND id_user = '$id_user'");
            mysqli_query($koneksi, "DELETE FROM tagihan WHERE id_game = '$id_game' AND id_user = '$id_user'");
        }
    }
?>
