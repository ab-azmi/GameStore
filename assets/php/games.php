<div class="shell">
    <div class="games-title">
        <h1>Recomendations</h1>
        <a href="#" class="games-link">
            Lainnya
        </a>
    </div>
    <div class="container2">
        <!-- <div class="row">
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img">
                        <img src="https://cdn.europosters.eu/image/1300/posters/assassin-s-creed-valhalla-raid-i96340.jpg" alt="Product" class="img-responsive" />
                    </div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Adventure,RPG</span>
                        </div>
                        <div class="title-product">
                            <h3>Assasins Creed: Valhala</h3>
                        </div>
                        <div class="description-prod">
                            <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">Rp500.000</span></div>
                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img"><img src="https://image.api.playstation.com/vulcan/img/rnd/202106/0722/4MxzDZKZwtEWyMWZghvwd7bQ.jpg" alt="Product" class="img-responsive" /></div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>FPS, Survival</span>
                        </div>
                        <div class="title-product">
                            <h3>Farcry 6</h3>
                        </div>
                        <div class="description-prod">
                            <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">Rp500.000</span></div>
                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img"><img src="https://s2.gaming-cdn.com/images/products/8701/orig/forza-horizon-5-pc-xbox-one-xbox-series-xs-pc-xbox-one-xbox-serie-x-s-game-microsoft-store-cover.jpg" alt="Product" class="img-responsive" /></div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Beauty</span>
                        </div>
                        <div class="title-product">
                            <h3>My face not my heart</h3>
                        </div>
                        <div class="description-prod">
                            <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">Rp500.000</span></div>
                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img"><img src="https://assets.mycast.io/posters/ghostrunner-fan-casting-poster-72330-large.jpg?1608327768" alt="Product" class="img-responsive" /></div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Drama</span>
                        </div>
                        <div class="title-product">
                            <h3>My face not my heart cvf ggf gfg g</h3>
                        </div>
                        <div class="description-prod">
                            <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">Rp500.000</span></div>
                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <?php
            require_once 'assets/php/connection.php';

            $sql = "SELECT * FROM games";
            if ($result = $mysqli->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
            ?>
                        <div class="col-md-3">
                            <div class="wsk-cp-product">
                                <div class="wsk-cp-img">
                                    <img src="<?php echo $row['gambar']; ?>" alt="Product" class="img-responsive" />
                                </div>
                                <div class="wsk-cp-text">
                                    <div class="category">
                                        <span><?php echo $row['kategori']; ?></span>
                                    </div>
                                    <div class="title-product">
                                        <h3><?php echo $row['nama']; ?></h3>
                                    </div>
                                    <div class="description-prod">
                                        <p><?php echo $row['deskripsi']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="wcf-left">
                                            <span class="price">
                                                <?php echo 'Rp '.$row['harga'] ?>
                                            </span>
                                        </div>
                                        <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                    $result->free();
                } else {
                    echo "Table Kosong gan";
                }
            } else {
                echo "Oops! Kayaknya ada yang salah. Coba lagi besok";
            }
            $mysqli->close();
            ?>

        </div>
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img">
                        <img src="https://i.pinimg.com/originals/91/e8/cc/91e8ccbb9b52288bec31e15f5ea3e659.png" alt="Product" class="img-responsive" />
                    </div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Ethnic</span>
                        </div>
                        <div class="title-product">
                            <h3>My face not my heart</h3>
                        </div>
                        <div class="description-prod">
                            <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">Rp500.000</span></div>
                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img"><img src="https://m.media-amazon.com/images/M/MV5BYjBkMTI3ZmYtMTk1Zi00Y2QxLTk2NDUtZGE3MWM5YzlkM2ZhXkEyXkFqcGdeQXVyMTA0MTM5NjI2._V1_.jpg" alt="Product" class="img-responsive" /></div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Introvert</span>
                        </div>
                        <div class="title-product">
                            <h3>My face not my heart</h3>
                        </div>
                        <div class="description-prod">
                            <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">Rp500.000</span></div>
                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_SherlockHolmesChapterOneDeluxeEdition_Frogwares_Bundles_S2_1200x1600-3d9a857b0c4cdddc01dcb692d57436ef" alt="Product" class="img-responsive" /></div>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Beauty</span>
                        </div>
                        <div class="title-product">
                            <h3>My face not my heart</h3>
                        </div>
                        <div class="description-prod">
                            <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">Rp500.000</span></div>
                            <div class="wcf-right"><a href="#" class="buy-btn"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>