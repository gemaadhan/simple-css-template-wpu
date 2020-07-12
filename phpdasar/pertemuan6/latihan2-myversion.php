<?php

$teenagers = [
    [
        "nama" => "Hafiz Aga Altamis",
        "alamat" => "Dinar Mas",
        "studi" => "Kuliah",
        "tempat_lahir" => "Semarang",
        "tanggal_lahir" => "4 October 2000",
        "kelamin" => "Laki-laki"
    ],
    [
        "nama" => "Rifqi Falih",
        "alamat" => "Dinar Mas XIII/8",
        "studi" => "SMA",
        "tempat_lahir" => "Semarang",
        "tanggal_lahir" => "15 January 2003",
        "kelamin" => "Laki-laki"
    ]

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($teenagers as $teenage) : ?>
        <ul>
            <li>Nama :<?= $teenage["nama"] ?></li>
            <li>Alamat :<?= $teenage["alamat"] ?></li>
            <li>Studi :<?= $teenage["studi"] ?></li>
            <li>Tempat Lahir :<?= $teenage["tempat_lahir"] ?></li>
            <li>Tanggal Lahir :<?= $teenage["tanggal_lahir"] ?></li>
            <li>Kelamin :<?= $teenage["kelamin"] ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>