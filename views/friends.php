<?php
    $conn = mysqli_connect("localhost", "root", "", "game_store");

    $result = mysqli_query($conn, "SELECT * FROM friends");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pertemanan</title>
</head>
<body>
    <h1>Pertemanan</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID User 1</th>
            <th>ID User 2</th>
            <th>Berteman</th>
        </tr>

        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <?php
        $bool;
        if ($row["berteman"] > 0){
            $bool = "Ya";
        } else {
            $bool = "Tidak";
        }
        ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_user_1"]; ?></td>
            <td><?= $row["id_user_2"]; ?></td>
            <td><?= $bool; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
