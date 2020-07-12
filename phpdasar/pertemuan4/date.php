<?php
date_default_timezone_set("Asia/Jakarta");
echo "<br>";
echo date_default_timezone_get();
echo "<br>";
echo date("l, D-M-Y, H:i:s");
echo "<br>";
echo date("l", time() - 1564563600);
echo "<br>";

//mktime(0,0,0,0,0,0,0)
//jam, menti, detik, bulan, tanggal, dan tahun

// echo date("l", mktime(0, 0, 0, 2, 15, 1994));
echo date("l", strtotime("15 Feb 1994"));

$awal = strtotime("31 Jul 2019");
$akhir = time();

$diff = $akhir - $awal;

echo 'Anda nganggur selama' . floor($diff / (60 * 60 * 24)) . 'hari';
