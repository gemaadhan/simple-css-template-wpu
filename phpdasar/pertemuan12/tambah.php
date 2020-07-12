<?php
require 'function.php';



if (isset($_POST["submit"])) {
    //cek apakah data berhasil di tambahkan
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo " <script>
        alert('data gagal ditambahkan');
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
    <title>Tambah data</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">

        <div class="form">
            <h1>tambah data</h1>
            <form action="" method="post">


                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" required>


                <label for="alamat">alamat</label>
                <input type="text" name="alamat" id="alamat" required>


                <label for="studi">studi</label>
                <input type="text" name="studi" id="studi" required>


                <label for="tempat_lahir">tempat_lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" required>


                <label for="tanggal_lahir">tanggal_lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>


                <label for="kelamin">kelamin</label>
                <select name="kelamin" id="kelamin" required>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>


                <label for="pdf">pdf</label>
                <input type="text" name="pdf" id="pdf" required>

                <button type="submit" name="submit">tambah data</button></>

            </form>
        </div>
    </div>
</body>

</html>