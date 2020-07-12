<?php
$data = file_get_contents('coba.json');
$remaja = json_decode($data, true);
echo $remaja[0]['pembimbing']['pembimbing2'];
