<?php
    require "functions.php";
    $id = $_GET["id"];
    if(delete($id) > 0){
        echo "
            <script>
                alert('game berhasil dihapus');
            </script>
        ";
        header("location:/gamestore_main/views/admin.php");
    }else{
        echo "
            <script>
                alert('game gagal dihapus');
            </script>
        ";
        header("location:/gamestore_main/views/admin.php");
    }
?>
