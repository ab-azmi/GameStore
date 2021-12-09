<?php
    session_start();
    session_destroy();
    header("location:/gamestore/index.php");
?>
