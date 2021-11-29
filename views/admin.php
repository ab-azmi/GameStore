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
                    <div class="tr">
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">
                                <a href="/gamestore/views/edit_game.php">Edit</a>
                                <a href="#">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <div class="tr">
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">data</div>
                        </div>
                        <div class="td">
                            <div class="cell">
                                <a href="/gamestore/views/edit_game.php">Edit</a>
                                <a href="#">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
<?php include '../assets/php/footer.php'; ?>

</html>