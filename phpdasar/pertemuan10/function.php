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
