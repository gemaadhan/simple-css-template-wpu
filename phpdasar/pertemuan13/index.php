<?php
require 'function.php';



$teenagers = query("SELECT * FROM teenagers ORDER BY id DESC");
// $teenagers = query("SELECT * FROM teenagers WHERE nama='Gema Nadia Ramadhana'");


//tombol cari dipencet
if (isset($_POST["cari"])) {
    $teenagers = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">tambah data</a>

    <form action="" method="post">
        <input type="text" name="keyword" size="35" autocomplete="off" placeholder="masukkan keyword pencarian" autofocus>
        <button type="submit" name="cari">cari</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No. </th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Studi</th>
            <th>Tempat Lahir</>
            <th>Tanggal Lahir</th>
            <th>Kelamin</th>
            <th>PDF</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($teenagers as $teenager) : ?>

            <tr>
                <td><?= $i ?></td>
                <td><a href="ubah.php?id=<?= $teenager["id"] ?>">ubah</a> | <a href="hapus.php?id=<?= $teenager["id"] ?>" onclick="return confirm('yakin?');">hapus</a></td>
                <td><?= $teenager["nama"] ?></td>
                <td><?= $teenager["alamat"] ?></td>
                <td><?= $teenager["studi"] ?></td>
                <td><?= $teenager["tempat_lahir"] ?></td>
                <td><?= $teenager["tanggal_lahir"] ?></td>
                <td><?= $teenager["kelamin"] ?></td>
                <td><a target=_blank href="files/<?php echo $teenager["pdf"] ?>"><?= $teenager["pdf"] ?></a></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>

</html>