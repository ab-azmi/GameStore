<?php
    $conn = mysqli_connect("localhost", "root", "", "game_store");

    $result = mysqli_query($conn, "SELECT * FROM membayar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pembayaran</title>
</head>
<body>
    <h1>Pembayaran</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID Tagihan</th>
            <th>ID User</th>
            <th>Tanggal Pembayaran</th>
            <th>Tervalidasi</th>
        </tr>

        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <?php
        $bool;
        if ($row["tervalidasi"] > 0){
            $bool = "Yes";
        } else {
            $bool = "No";
        }
        ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_tagihan"]; ?></td>
            <td><?= $row["id_user"]; ?></td>
            <td><?= $row["tanggal_pembayaran"]; ?></td>
            <td><?= $bool; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
