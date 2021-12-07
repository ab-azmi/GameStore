<?php
    $conn = mysqli_connect("localhost", "root", "", "game_store");

    $result = mysqli_query($conn, "SELECT * FROM tagihan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tagihan</title>
</head>
<body>
    <h1>Tagihan</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID Tagihan</th>
            <th>ID Game</th>
            <th>Diskon</th>
            <th>Pajak</th>
            <th>Total Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_tagihan"]; ?></td>
            <td><?= $row["id_game"]; ?></td>
            <td><?= $row["diskon"]; ?></td>
            <td><?= $row["pajak"]; ?></td>
            <td><?= $row["total_harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
