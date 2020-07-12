<?php
require 'function.php';
$teenagers = query("SELECT * FROM teenagers");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No. </th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kelamin</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($teenagers as $teenager) : ?>

            <tr>
                <td><?= $i ?></td>
                <td><a href="#">ubah</a> | <a href="#">hapus</a></td>
                <td><?= $teenager["nama"] ?></td>
                <td><?= $teenager["alamat"] ?></td>
                <td><?= $teenager["tempat_lahir"] ?></td>
                <td><?= $teenager["tanggal_lahir"] ?></td>
                <td><?= $teenager["kelamin"] ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>

</html>