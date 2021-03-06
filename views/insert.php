<?php
session_start();
    require "../assets/php/functions.php";

    require_once('../assets/php/classes/db.php');
    require_once('../assets/php/classes/crud.php');
    $kategori = query("SELECT * FROM kategori");
    if(isset($_POST["submit"])){
        if(insert($_POST) > 0){
            echo "
                <script>
                    alert('game berhasil ditambahkan');
                    document.location.href = 'admin.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('game gagal ditambahkan');
                    document.location.href = 'insert.php';
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
            <h1 class="text-center">INSERT GAME</h1>
            <form action="" method="post">
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="webflow-style-input">
                            <input class="" type="text" name="nama_game" placeholder="Nama Game"></input>
                            <button type="submit"><i class="fas fa-gamepad"></i></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="webflow-style-input">
                            <input class="" type="number" name="harga" placeholder="Harga Game"></input>
                            <button type="submit"><i class="fas fa-dollar-sign"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <input type="text" placeholder="Tanggal rilis" name="tanggal_rilis" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <button type="submit"><i class="far fa-calendar-alt"></i></button>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <input type="text" placeholder="Deskripsi singkat" name="deskripsi">
                        <button type="submit"><i class="fas fa-quote-left"></i></button>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <input type="text" placeholder="Url gambar" name="gambar">
                        <button type="submit"><i class="far fa-image"></i></button>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="webflow-style-input">
                        <?php foreach($kategori as $row): ?>
                            <input type="checkbox" name="kategori[]" id="<?php echo $row["kategori"] ?>" value="<?php echo $row["id_kategori"] ?>">
                            <label for="<?php echo $row["kategori"] ?>"><?php echo $row["kategori"] ?></label>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-3">
                    <button class="gradient-border mt-5" id="box" name = "submit">
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
