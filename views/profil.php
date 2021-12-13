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
    <?php
    $obj = new CRUD();

    if (isset($_SESSION["id_user"])) :
    ?>
        <div class="shell p-5">
            <div class="row">
                <h1>Username : <?= $_SESSION["username"] ?></h1>
            </div>
        </div>
        <div class="games-title">
            <h1>Your Games</h1>
        </div>
        <div class="row p-5">
            <?php
            $data = $obj->getKoleksi($_SESSION["id_user"]);
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
                                        <div class="wcf-left"><span class="price"><?php echo $row["lama_bermain"]; ?> hours played</span></div>
                                        <div class="wcf-right"><a href="#" class="buy-btn">
                                            <i class="fas fa-gamepad"></i>
                                        </a></div>
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

    <?php endif ?>
</body>
<?php include '../assets/php/footer.php'; ?>

</html>