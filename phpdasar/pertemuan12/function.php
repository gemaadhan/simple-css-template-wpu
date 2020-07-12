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
    $pdf = htmlspecialchars($data["pdf"]);

    //query insert data
    $query = "INSERT INTO teenagers
        VALUES
        ('','$nama','$alamat','$studi','$tempat_lahir','$tanggal_lahir','$kelamin','$pdf')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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
    $pdf = htmlspecialchars($data["pdf"]);


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
