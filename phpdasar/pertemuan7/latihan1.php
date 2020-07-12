<?php
// $x = 10;
// function tampilx()
// {
//     global $x;
//     echo $x;
// }

// tampilx();

//superglobal semua nya bertipe associative

// var_dump($_GET);
// var_dump($_POST);
// echo $_SERVER["SERVER_NAME"];
// $_GET["nama"] = "Gema";
// $_GET["nim"] = "2112022120304";
// $_GET["hp"] = "android";
// $hp = "apple";
// function tes()
// {
//     global $hp;
//     echo $hp;
//     echo $_GET["hp"];
// }

// echo tes();

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
    <h1>data mahasiswa</h1>
    </ul>
    <?php foreach ($teenagers as $teenager) : ?>

        <li>
            <a href="latihan2.php?nama=
            <?php echo $teenager["nama"]; ?>
            &alamat=<?php echo $teenager["alamat"]; ?>
            &studi=<?php echo $teenager["studi"]; ?>
            &tempat_lahir=<?php echo $teenager["tempat_lahir"]; ?>
            &tempat_lahir=<?php echo $teenager["tempat_lahir"]; ?>
            &tanggal_lahir=<?php echo $teenager["tanggal_lahir"]; ?>
            &kelamin=<?php echo $teenager["kelamin"]; ?>
            ">
                <?= $teenager["nama"] ?></a>
        </li>


    <?php endforeach; ?>
    </ul>
</body>

</html>