<?php
    require "../assets/php/functions.php";
    if(isset($_POST["submit"])){
        if(insert($_POST) > 0){
            echo "
                <script>
                    alert('game berhasil ditambahkan');
                    document.location.href = '../index.php';
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
        
                <!--Mungkin Bisa ditambah checkbox buat kategori-->
        
                <div class="col-3 mt-5">
                    <div class="webflow-style-input">
                        <input type="text" placeholder="SUBMIT" disabled>
                        <button type="submit" name="submit"><i class="fas fa-upload"></i></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

<?php include '../assets/php/footer.php'; ?>
<script>

</script>

</html>
