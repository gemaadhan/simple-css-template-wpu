<?php
$conn = mysqli_connect("localhost", "root", "", "baitussalam");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $conn;
    //ambil data dari tiap element dalam form
    $nama = htmlspecialchars($data["nama"]);

    $alamat = htmlspecialchars($data["alamat"]);
    $studi = htmlspecialchars($data["studi"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $kelamin = htmlspecialchars($data["kelamin"]);

    //upload gambar
    $pdf = upload();
    if ($pdf === false) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO teenagers
        VALUES
        ('','$nama','$alamat','$studi','$tempat_lahir','$tanggal_lahir','$kelamin','$pdf')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namapdf = $_FILES['pdf']['name'];
    $ukuranpdf = $_FILES['pdf']['size'];
    $error = $_FILES['pdf']['error'];
    $tmpName = $_FILES['pdf']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('pilih gambar dulu')</script>";
        return false;
    }

    //hanya pdf
    $ekstensivalid = ['pdf', 'jpg'];
    $ekstensifile = explode('.', $namapdf);
    //ambil array yang paling akhir yaitu ekstensinya
    $ekstensifile = strtolower(end($ekstensifile));
    //cari jarum dalam arraya
    if (!in_array($ekstensifile, $ekstensivalid)) {
        echo "<script>alert('ekstensi tidak diizinkan')</script>";
        return false;
    }

    if ($ukuranpdf > 2000000) {
        echo "<script>alert('ukuran file terlalu besar')</script>";
        return false;
    }

    //bikin nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensifile;



    //lolos pengecekan
    move_uploaded_file($tmpName, 'files/' . $namaFileBaru);
    return $namaFileBaru;
}




function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM teenagers WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);

    $alamat = htmlspecialchars($data["alamat"]);
    $studi = htmlspecialchars($data["studi"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $kelamin = htmlspecialchars($data["kelamin"]);



    $pdflama = htmlspecialchars($data["filelama"]);

    //cek apakah user pilih gambar baru
    if ($_FILES['pdf']['error'] === 4) {
        $pdf = $pdflama;
    } else {
        $pdf = upload();
    }




    $query = "UPDATE teenagers SET
    nama = '$nama', 
    alamat ='$alamat', 
    studi ='$studi',
    tempat_lahir = '$tempat_lahir',
    tanggal_lahir = '$tanggal_lahir',
    kelamin = '$kelamin',
    pdf = '$pdf' 
    WHERE id = $id;
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM teenagers WHERE 
    nama LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    studi LIKE '%$keyword%' OR
    tempat_lahir LIKE '%$keyword%' OR
    tanggal_lahir LIKE '%$keyword%' OR
    kelamin LIKE '%$keyword%' 
    ";
    return query($query);
}
