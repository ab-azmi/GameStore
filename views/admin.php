<?php
    require "../assets/php/functions.php";
    $game = query("SELECT
                    publishers.id_publisher,
                    publishers.nama_publisher,
                    games.id_game,
                    games.name,
                    games.harga,
                    games.deskripsi,
                    games.tanggal_rilis,
                    games.gambar
                    FROM((publisher_game INNER JOIN publishers ON publisher_game.id_publisher = publishers.id_publisher) 
                    INNER JOIN games ON publisher_game.id_game = games.id_game) /*WHERE publishers.id_publisher = 1*/"); //id_publisher fleksibel tergantung login admin
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../assets/php/header.php'; ?>

<body>
    <?php include '../assets/php/navbar.php'; ?>

    <section class="manage_games">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-3">
                    <a href="/gamestore/views/insert.php" class="box-link">
                        <button class="gradient-border mt-5" id="box">
                            Insert Games
                        </button>
                    </a>
                </div>
            </div>

            <div class="table striped">
                <div class="tr title">
                    <div class="td">
                        <div class="cell">Nama</div>
                    </div>
                    <div class="td">
                        <div class="cell">Gambar</div>
                    </div>
                    <div class="td">
                        <div class="cell">Harga</div>
                    </div>
                    <div class="td">
                        <div class="cell">Deskripsi</div>
                    </div>
                    <div class="td">
                        <div class="cell">Tanggal Rilis</div>
                    </div>
                    <div class="td">
                        <div class="cell">Publisher</div>
                    </div>
                    <div class="td">
                        <div class="cell">Kategori</div>
                    </div>
                    <div class="td">
                        <div class="cell">Action</div>
                    </div>
                </div>
                <div class="tr-group">
                    <?php foreach($game as $baris) : ?>
                        <div class="tr">
                            <div class="td" style="height: 125px; overflow : auto;">
                                <div class="cell"><?php echo $baris["name"]; ?></div>
                            </div>
                            <div class="td" style="height: 125px; overflow : auto;">
                                <div class="cell"><a href="<?php echo $baris["gambar"]; ?>"><?php echo $baris["gambar"]; ?></a></div>
                            </div>
                            <div class="td" style="height: 125px; overflow : auto;">
                                <div class="cell"><?php echo $baris["harga"]; ?></div>
                            </div>
                            <div class="td" style="height: 125px; overflow : auto;">
                                <div class="cell"><?php echo $baris["deskripsi"]; ?></div>
                            </div>
                            <div class="td" style="height: 125px; overflow : auto;">
                                <div class="cell"><?php echo $baris["tanggal_rilis"]; ?></div>
                            </div>
                            <div class="td" style="height: 125px; overflow : auto;">
                                <div class="cell"><?php echo $baris["nama_publisher"]; ?></div>
                            </div>
                            <div class="td">
                                <div class="cell">data</div>
                            </div>
                            <div class="td">
                                <div class="cell">
                                    <a href="/gamestore/views/edit_game.php">Edit</a>
                                    <a href="/gamestore/assets/php/delete.php?id=<?php echo $baris["id_game"]; ?>" onclick="return confirm('yakin ?');">Hapus</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

</body>
<?php include '../assets/php/footer.php'; ?>

</html>
