<?php
// $students = ["gema", 2111, "gema@gmail.com", "siskom"]
//array associative

$students = [
    [
        "nama" => "Gema",
        "nim" => 21120112130040,
        "email" => "gemaadhan@gmail.com",
        "jurusan" => "siskom",
        "tugas" => [90, 80, 70]
    ],
    [
        "nama" => "nadia",
        "nim" => 211202130040,
        "email" => "nadia@gmail.com",
        "jurusan" => "pwk",
        // "tugas" => [90, 80, 70, 100]
    ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li>Nama : <?= $student["nama"] ?></li>
            <li>Nim : <?= $student["nim"] ?></li>
            <li>Email : <?= $student["email"] ?></li>
            <li>Jurusan : <?= $student["jurusan"] ?></li>
            <li> Tugas :
                <?php if (isset($student["tugas"])) : ?>
                    <?php foreach ($student["tugas"] as $value) : ?>
                        <?php echo $value ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    null
                <?php endif; ?>
            </li>
        </ul>
    <?php endforeach ?>
</body>

</html>