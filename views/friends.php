<?php
    session_start();
    $i = 1;
    require "../assets/php/functions.php";
    $id = $_SESSION["id_user"];
    $teman = query("SELECT users.username FROM (friends INNER JOIN users ON friends.id_user_2 = users.id_user AND friends.id_user_1 = $id)");
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
            <th>Friends</th>
        </tr>
        <?php foreach($teman as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["username"] ;?></td>
            </tr>
        <?php
            $i++;
            endforeach;
        ?>
    </table>
</body>
</html>
