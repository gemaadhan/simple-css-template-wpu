<?php
//array
// variabel yang dapat memiliki banyak nilai
//cara lama
$hari = array("senin", "selasa", "rabu", "kamis", "jum'at");

$bulan = ["Januari", "februari"];
$arr1 = [121, "zdgad", true];

// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// var_dump($hari);
// $hari[] = "sabtu";
// $hari[] = "minggu";
// echo "<br>";
// var_dump($hari);

//menampilkan array ke user
$numbers = [2, 3, 4, 1, 2, 42, 4, 8];
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <style>
        .kotak {
            float: left;
            margin: 3px;
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
        }

        .clear {
            clear: left;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 0; $i < count($numbers); $i++) { ?>
        <div class="kotak"><?php echo $numbers[$i]; ?> </div>
    <?php   } ?>

    <div class="clear"></div>

    <?php foreach ($numbers as $number) { ?>
        <div class="kotak"><?php echo $number ?></div>

    <?php } ?>

    <div class="clear"></div>

    <!-- cara templateing -->
    <?php foreach ($numbers as $number) : ?>
        <div class="kotak"><?php echo $number; ?></div>
    <?php endforeach; ?>
</body>

</html>