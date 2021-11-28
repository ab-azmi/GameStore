<?php
    require "functions.php";
    $kategori = query("SELECT * FROM kategori");
?>  
  
<div class="kategori-title">
    <h1>Kategori</h1>
    <a href="#" class="kategori-link">
        Lainnya
    </a>
</div>
<div class="cards-list">
    <?php $i = 1; ?>
    <?php foreach($kategori as $row) : ?>
    <div class="card-custom <?php echo $i ?>">
        <div class="card_image"> <img src="<?php echo $row["gambar"] ?>" /> </div>
        <div class="card_title title-white">
            <p><?php echo $row["kategori"] ?></p>
        </div>
    </div>
    <?php $i++; ?>
    <?php endforeach; ?>
</div>
