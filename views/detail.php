<!DOCTYPE html>
<html lang="en">

<?php include '../assets/php/header.php'; ?>

<body>
    <?php include '../assets/php/navbar.php'; ?>

    <section class="wow fadeIn example no-padding no-transition slider-top">
        <div style="min-height: 50px;">
            <!-- Jssor Slider Begin -->


            <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="https://www.jssor.com/theme/svg/loading/static-svg/spin.svg" />
                </div>

                <!-- Slides Container -->
                <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                    <div>
                        <img data-u="image" src="https://www.xboxygen.com/IMG/jpg/assassins-creed-valhalla-xbox-seriesx.jpg" class="slider" />
                    </div>
                    <div>
                        <img data-u="image" src="https://cdn.mos.cms.futurecdn.net/eFfdeboHexD3qdgWgs9dze-1200-80.jpg" class="slider" />
                    </div>
                    <div>
                        <img data-u="image" src="https://www.newgamenetwork.com/images/uploads/gallery/AssassinsCreedValhalla/acvalhalla_02.jpg" class="slider" />
                    </div>
                </div>

                <!--#region Bullet Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
                <style>

                </style>
                <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                        </svg>
                    </div>
                </div>
                <!--#endregion Bullet Navigator Skin End -->

                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
                <style>

                </style>
                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
                <!--#endregion Arrow Navigator Skin End -->
            </div>
            <!-- Jssor Slider End -->
        </div>
    </section>

    <div class="tab-container">
        <div class="tabs effect-4">
            <!-- tab-title -->
            <input type="radio" id="tab-1" name="tab-effect-4" checked="checked">
            <span>
                <i class="far fa-list-alt"></i><span>Details</span>
            </span>

            <input type="radio" id="tab-2" name="tab-effect-4">
            <span>
                <i class="far fa-comments"></i></i><span>Feedbacks</span>
            </span>

            <input type="radio" id="tab-3" name="tab-effect-4">
            <span>
                <i class="fas fa-memory"></i><span>Requirements</span>
            </span>

            <!-- <input type="radio" id="tab-4" name="tab-effect-4">
            <span>
                <i class="fa fa-cloud-upload"></i><span>Upload</span>
            </span>

            <input type="radio" id="tab-5" name="tab-effect-4">
            <span>
                <i class="fa fa-cog"></i><span>Settings</span>
            </span> -->

            <!-- tab-content -->
            <div class="tab-content">
                <section id="tab-item-1" class="tab-details">
                    <img class="details-img" src="https://cdn.europosters.eu/image/1300/posters/assassin-s-creed-valhalla-raid-i96340.jpg" alt="" srcset="">
                    <div class="details-text">
                        <h1>Assasin's Creed: Valhala</h1>
                        <div class="badges">
                            <span class="details-badge">Adventure</span>
                            <span class="details-badge">RPG</span>
                            <span class="details-badge">War</span>
                        </div>
                        <p class="details-rates mt-5">
                            IGN : 8/10 <br>
                            Metacritic : 7.9/10
                        </p>
                        <hr>
                        <p class="details-publisher">Publisher : Ubisoft</p>
                        <p class="details-rilis">Rilis : 24 November 2022</p>
                        <p class="details-platform">Platform : PS5, PS4, XBOX X, PC</p>
                        <hr>
                        <p class="details-deskripsi">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex enim provident unde sit sint, corporis rem consequatur. Minima, consequatur natus! Perspiciatis tempora alias iusto ducimus facere dolore dolorem explicabo mollitia.
                        </p>
                        <p class="details-harga">Rp. 200000</p>
                        <div class="row mt-5">
                            <button class="col-3 details-btn details-btn-beli">Beli</button>
                            <button class="col-3 offset-1 details-btn details-btn-keranjang">Keranjang</button>
                        </div>
                    </div>
                </section>
                <section id="tab-item-2">
                    <h1>Two</h1>
                </section>
                <section id="tab-item-3">
                    <h1>Three</h1>
                </section>
                <!-- <section id="tab-item-4">
                    <h1>Four</h1>
                </section>
                <section id="tab-item-5">
                    <h1>Five</h1>
                </section> -->
            </div>
        </div>
    </div>

</body>
<?php include '../assets/php/footer.php'; ?>
<script src="/gamestore/assets/js/carousel.js"></script>

</html>