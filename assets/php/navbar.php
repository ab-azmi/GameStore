<div class="page-wrapper">
    <div class="nav-wrapper">
        <div class="grad-bar"></div>
        <nav class="navbar">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav no-search">
                <li class="nav-item"><a href="/GameStore/index.php">Home</a></li>
                <?php 
                if(isset($_SESSION["id_user"])){ 
                    if($_SESSION["username"] == "admin"){
                // ?>
                <li class="nav-item"><a href="/GameStore/views/admin.php">Admin</a></li>
                <?php 
                    } 
                }
                ?>
                <?php if(isset($_SESSION["id_user"])): ?>
                    <li class="nav-item"><a href="/gamestore/assets/php/includes/logout_inc.php">Log-out</a></li>
                <?php else : ?>
                    <li class="nav-item"><a href="/gamestore/views/login.php">Login</a></li>
                <?php endif; ?>
                <li class="nav-item"><a href="#">Profil</a></li>
                <li class="nav-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Friends
                    </a>
                </li>
                <li class="nav-item"><a href="/gamestore/views/keranjang.php">
                        <i class="fas fa-shopping-cart"></i>
                    </a></li>
                <i class="fas fa-search" id="search-icon"></i>
                <input class="search-input" type="text" placeholder="Search..">
            </ul>
        </nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Your Friends</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="friend-list">
                        <?php
                        // $obj = new CRUD();

                        // $friend = $obj->getFriends($_SESSION["id_user"]);
                        // if($friend->rowCount() > 0){
                        //     while($row = $friend->fetch(PDO::FETCH_ASSOC)){

                        $conn = mysqli_connect("localhost", "root", "", "game_store");

                        $id = $_SESSION["id_user"];

                        $sql = "SELECT * FROM users INNER JOIN friends ON users.id_user = friends.id_user_2 WHERE friends.id_user_1 = '$id'";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)):
                        ?>
                         <div class="friend">
                            <p class="friend-name">
                                <?= $row["username"] ?>
                            </p>
                            <p class="friend-status online">Online</p>
                        </div>
                        <?php  
                        endwhile;
                            //     }
                            // }
                        ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>