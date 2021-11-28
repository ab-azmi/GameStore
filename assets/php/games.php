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
            <?php foreach($games as $row) : ?>
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img">
                        <img src="<?php echo $row["gambar"]; ?>" alt="Product" class="img-responsive" />
                    </div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Adventure,RPG</span>
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
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
