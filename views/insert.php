<!DOCTYPE html>
<html lang="en">

<?php include '../assets/php/header.php'; ?>

<body>
    <?php include '../assets/php/navbar.php'; ?>
    <section class="form-section">
        <div class="container">
            <h1 class="text-center">INSERT GAME</h1>
            <div class="row mt-5">
                <div class="col-6">
                    <div class="webflow-style-input">
                        <input class="" type="text" placeholder="Nama Game"></input>
                        <button type="submit"><i class="fas fa-gamepad"></i></button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="webflow-style-input">
                        <input class="" type="number" placeholder="Harga Game"></input>
                        <button type="submit"><i class="fas fa-dollar-sign"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="webflow-style-input">
                    <input type="text" placeholder="Tanggal rilis" onfocus="(this.type='date')" onblur="(this.type='text')">
                    <button type="submit"><i class="far fa-calendar-alt"></i></button>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="webflow-style-input">
                    <input type="text" placeholder="Deskripsi singkat">
                    <button type="submit"><i class="fas fa-quote-left"></i></button>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="webflow-style-input">
                    <input type="text" placeholder="Url gambar">
                    <button type="submit"><i class="far fa-image"></i></button>
                </div>
            </div>
            <button class="gradient-border mt-5" id="box">
                Submit
            </button>
        </div>
    </section>
</body>

<?php include '../assets/php/footer.php'; ?>
<script>

</script>

</html>