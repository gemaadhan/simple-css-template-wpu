<?php
require 'function.php';

//ambil data di url
$id = $_GET["id"];
//query data mahasiswa beradasarkan id

$teenager = query("SELECT * FROM teenagers WHERE id = $id")[0];
//kenapa pake [0], karena kita pake funsi query yang mengembalikan assoc array
// var_dump($teenager["nama"]);

if (isset($_POST["submit"])) {

    var_dump($teenager["pdf"]);
    //cek apakah data berhasil di ubah
    // var_dump($_FILES['pdf']);
    // die;
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil di ubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo " <script>
        alert('tidak ada data yang di ubah');
        document.location.href = 'index.php';
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>

<body>
    <h1>Ubah data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $teenager["id"] ?>">
        <input type="hidden" name="filelama" value="<?= $teenager["pdf"] ?>">
        <ul>
            <li>
                <label for="nama">nama</label>
                <input value="<?= $teenager["nama"]  ?>" type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="alamat">alamat</label>
                <input value="<?= $teenager["alamat"]  ?>" type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="studi">studi</label>
                <input value="<?= $teenager["studi"]  ?>" type="text" name="studi" id="studi" required>
            </li>
            <li>
                <label for="tempat_lahir">tempat_lahir</label>
                <input value="<?= $teenager["tempat_lahir"]  ?>" type="text" name="tempat_lahir" id="tempat_lahir" required>
            </li>
            <li>
                <label for="tanggal_lahir">tanggal_lahir</label>
                <input value="<?= $teenager["tanggal_lahir"]  ?>" type="date" name="tanggal_lahir" id="tanggal_lahir" required>
            </li>
            <li>
                <label for="kelamin">kelamin</label>
                <select name="kelamin" id="kelamin" required>

                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </li>
            <li>
                <label for="pdf">pdf</label>
                <input type="file" name="pdf" id="pdf" size="2px"><?= $teenager["pdf"]  ?>
            </li>
            <li><button type="submit" name="submit">ubah data</button></li>
        </ul>
    </form>
</body>

</html>