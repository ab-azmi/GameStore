<?php
    $conn = mysqli_connect("localhost", "root", "", "game_store");

    $result = mysqli_query($conn, "SELECT * FROM keranjang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Keranjang</title>
</head>
<body>
    <h1>Keranjang</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID Game</th>
            <th>ID User</th>
        </tr>

        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_game"]; ?></td>
            <td><?= $row["id_user"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
