<?php
session_start();
require "../assets/php/functions.php";
require_once('../assets/php/classes/db.php');
require_once('../assets/php/classes/crud.php');
if(!isset($_SESSION["id_user"])){
    header("location:/gamestore/");
}
if(isset($_GET["id_game"])){
    tambahKeranjang($_GET["id_game"], $_SESSION["id_user"]);
    header("location:/gamestore/views/keranjang.php");
}
if(isset($_GET["hapus"])){
    hapusKeranjang($_GET["id_game"], $_SESSION["id_user"]);
    header("location:/gamestore/views/keranjang.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../assets/php/header.php'; ?>

<body>
    <?php include '../assets/php/navbar.php'; ?>

    <div class="shell">
        <div class="games-title">
            <h1>Keranjang Anda</h1>
            <h1>BAYAR</h1>
        </div>
        <div class="container2">
            <div class="row">
                <?php
                $obj = new CRUD();

                $data = $obj->getKeranjang($_SESSION["id_user"]);
                if ($data->rowCount() > 0) {
                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                ?>
                        <div class="col-md-3">
                            <a href="/gamestore/views/detail.php?id=<?php echo $row["id_game"]; ?>" class="games-detail-link">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="<?php echo $row["gambar"]; ?>" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>
                                                <?php
                                                $kategori = $obj->getKategori($row["id_game"]);
                                                if ($kategori->rowCount() > 0) {
                                                    while ($row_ktgr = $kategori->fetch(PDO::FETCH_ASSOC)) {
                                                ?>

                                                        <?= $row_ktgr["kategori"] ?>

                                                <?php
                                                    }
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="title-product">
                                            <h3><?php echo $row["name"]; ?></h3>
                                        </div>
                                        <div class="description-prod">
                                            <p><?php echo $row["deskripsi"]; ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rp. <?php echo $row["harga"]; ?></span></div>
                                            <div class="wcf-right"><a href="tagihan.php?id_game=<?php echo $row["id_game"]; ?>&harga=<?php echo $row["harga"]; ?>" class="buy-btn" style="text-decoration: none; width: 80px; border-radius:12px;">bayar</a></div>
                                            <div class="wcf-right"><a href="keranjang.php?hapus&id_game=<?php echo $row["id_game"] ?>" class="buy-btn" style="text-decoration: none;">X</a></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>
<?php include '../assets/php/footer.php'; ?>

</html>
