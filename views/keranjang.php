<?php
session_start();
require_once('../assets/php/classes/db.php');
require_once('../assets/php/classes/crud.php');
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
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
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