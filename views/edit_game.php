<?php
require "../assets/php/functions.php";

$id = $_GET["id"];
$kategori_lama = query("SELECT
                        kategori.id_kategori
                        FROM((kategori_games INNER JOIN games ON kategori_games.id_game = games.id_game) 
                        INNER JOIN kategori ON kategori_games.id_kategori = kategori.id_kategori) WHERE games.id_game = '$id'");
$kategori = query("SELECT * FROM kategori");
$game = query("SELECT * FROM games WHERE id_game = '$id'")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "
                <script>
                    alert('game berhasil diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('game gagal diubah');
                    document.location.href = 'edit_game.php';
                </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../assets/php/header.php'; ?>

<body>
    <?php include '../assets/php/navbar.php'; ?>

    <section class="form-section">
        <div class="container">
            <h1 class="text-center">EDIT GAME</h1>
            <form action="" method="post">
                <?php $i = 0; foreach($kategori_lama as $row) : ?>
                    <input type="hidden" name="kategori_lama[]" value="<?php echo $kategori_lama["$i"]["id_kategori"]; ?>">
                <?php $i++; endforeach; ?>
                <input type="hidden" name="id_game" value="<?php echo $game["id_game"]; ?>">
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="webflow-style-input">
                            <input class="" type="text" name="nama_game" value="<?php echo $game["name"] ?>"></input>
                            <button type="submit"><i class="fas fa-gamepad"></i></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="webflow-style-input">
                            <input class="" type="number" name="harga" value="<?php echo $game["harga"] ?>"></input>
                            <button type="submit"><i class="fas fa-dollar-sign"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <input type="text" value="<?php echo $game["tanggal_rilis"] ?>" name="tanggal_rilis" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <button type="submit"><i class="far fa-calendar-alt"></i></button>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <input type="text" value="<?php echo $game["deskripsi"] ?>" name="deskripsi">
                        <button type="submit"><i class="fas fa-quote-left"></i></button>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <input type="text" value="<?php echo $game["gambar"] ?>" name="gambar">
                        <button type="submit"><i class="far fa-image"></i></button>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <?php $i = 0; foreach ($kategori as $row) : ?>
                            <input type="checkbox" name="kategori[]" id="<?php echo $kategori["$i"]["kategori"] ?>" value="<?php echo $kategori[$i]["id_kategori"] ?>">
                            <label for="<?php echo $kategori["$i"]["kategori"] ?>"><?php echo $kategori["$i"]["kategori"] ?></label>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                </div>
                <div class="col-3">
                    <button class="gradient-border mt-5" id="box" name="submit">
                        Submit
                    </button>
                </div>
            </form>

        </div>
    </section>

</body>

<?php include '../assets/php/footer.php'; ?>
<script>

</script>

</html>
