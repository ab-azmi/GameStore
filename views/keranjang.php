<?php
$games = query("SELECT * FROM games");
?>
<div class="shell">
    <div class="games-title">
        <h1>Recomendations</h1>
        <a href="#" class="games-link">
            Lainnya
        </a>
    </div>
    <div class="container2">
        <div class="row">
            <?php foreach ($games as $row) : ?>
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
                                        $id = $row["id_game"];
                                        $kategori = query("SELECT
                                                            kategori.kategori
                                                            FROM((kategori_games INNER JOIN games ON kategori_games.id_game = games.id_game) 
                                                            INNER JOIN kategori ON kategori_games.id_kategori = kategori.id_kategori) WHERE games.id_game = $id");

                                        foreach ($kategori as $baris) : ?>
                                             <?php echo $baris["kategori"]; ?>
                                        <?php endforeach;
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
                                    <?php
                                        if(isset($_SESSION["id_user"])) :
                                            $id_user = $_SESSION["id_user"];
                                            $id_game_ada = mysqli_query($koneksi, "SELECT * FROM keranjang WHERE id_game = '$id' AND id_user = '$id_user'");
                                            
                                            if(!mysqli_num_rows($id_game_ada) == 1) :
                                    ?>
                                        <div class="wcf-right"><a href="/gamestore/views/keranjang.php?id_game=<?php echo "$id" ?>" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                                    <?php 
                                            endif;
                                        else : ?>
                                            <div class="wcf-right"><a href="/gamestore/views/keranjang.php" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                                        <?php endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
