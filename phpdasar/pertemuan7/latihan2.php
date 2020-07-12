<!-- cek apakah tidak ada data di $_GET-->
<?php

if (
    !isset($_GET["nama"])
    || !isset($_GET["alamat"])
    || !isset($_GET["studi"])
    || !isset($_GET["tempat_lahir"])
    || !isset($_GET["tanggal_lahir"])
    || !isset($_GET["kelamin"])
) {
    // redirect
    header("Location: latihan1.php");
    exit; //supaya script bawah nya tidak dieksekusi
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><?php echo $_GET["nama"] ?></li>
        <li><?php echo $_GET["alamat"] ?></li>
        <li><?php echo $_GET["studi"] ?></li>
        <li><?php echo $_GET["tempat_lahir"] ?></li>
        <li><?php echo $_GET["tanggal_lahir"] ?> :</li>
        <li><?php echo $_GET["kelamin"] ?></li>

    </ul>
    <a href="latihan1.php">kembali ke daftar teenagers</a>
</body>

</html>