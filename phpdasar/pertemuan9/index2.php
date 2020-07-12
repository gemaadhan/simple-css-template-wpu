<?php
$conn = mysqli_connect("localhost", "root", "", "baitussalam");
// ambil data dari tabel mahasiswa

$result = mysqli_query($conn, "SELECT * FROM teenagers");

//ambil data (fetch) teenagers dari object result
//ada 4 cara
//masing masing hanya mengembalikan satu baris
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
//mysqli_fetch_object() // mengembalikan object, aksesnya kolomny dengan ->

// while ($tngr = mysqli_fetch_assoc($result)) {
//     var_dump($tngr);
// }


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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td><?= $i ?></td>
                <td><a href="#">ubah</a> | <a href="#">hapus</a></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["alamat"] ?></td>
                <td><?= $row["tempat_lahir"] ?></td>
                <td><?= $row["tanggal_lahir"] ?></td>
                <td><?= $row["kelamin"] ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>

</body>

</html>