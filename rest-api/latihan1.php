<?php
// $mahasiswa = [
//     [
//         "nama" => "Gema Nadia Ramadhana",
//         "nim" => "2112012130040",
//         "email" => "gemaadhan@gmail.com"
//     ],
//     [
//         "nama" => "Gema Nadia Ramadhana",
//         "nim" => "2112012130040",
//         "email" => "gemaadhan@gmail.com"
//     ]
// ]; 

$dbh = new PDO('mysql:host=localhost;dbname=baitussalam', 'root', '');

$db = $dbh->prepare('SELECT * FROM teenagers');
$db->execute();
$teenager = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($teenager);
echo $data;
