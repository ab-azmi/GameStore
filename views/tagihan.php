<?php
    session_start();
    $id = $_SESSION["id_user"];
    require "../assets/php/functions.php";
    if(isset($_GET["id_game"])){
        tambahTagihan($_GET["id_game"], $_GET["harga"], $id);
        header("location:/gamestore/views/tagihan.php");
    }
    if(isset($_GET["hapus"])){
        mysqli_query($koneksi, "DELETE FROM tagihan WHERE id_user = '$id'");
        header("location:/gamestore/views/tagihan.php");
    }
    $tagihan = query("SELECT games.name, tagihan.harga FROM tagihan INNER JOIN games ON tagihan.id_game = games.id_game WHERE tagihan.id_user = '$id';");
    $total_tagihan = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tagihan</title>
</head>
<body>
    <h1>Tagihan</h1>
    <?php foreach($tagihan as $row) : ?>
        <p><?php echo $row["name"]; ?> ---> <?php echo $row["harga"]; ?> </p>
        <?php $total_tagihan = $total_tagihan + $row["harga"];?>
    <?php endforeach; ?>
    <p>total tagihan = <?php echo $total_tagihan; ?></p>
    <a href="/gamestore/views/profil.php?tambah_koleksi">Bayar</a>
    <a href="/gamestore/views/tagihan.php?hapus">Batal</a>
</body>
</html>
