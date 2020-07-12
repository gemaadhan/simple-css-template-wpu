<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            background-color: greenyellow;
            width: 100px;
            height: 100px;
            line-height: 60px;
            text-align: center;
            color: salmon;
            font-size: 40px;
            transition: 1s;
            margin: 5px;
            box-sizing: border-box;

            float: left;
        }

        .container {
            box-sizing: border-box;

            width: 800px;
            margin: auto;

        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: salmon;
            color: greenyellow;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    // $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $numbers = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
    <div class="container">
        <?php foreach ($numbers as $number) : ?>
            <?php foreach ($number as $angka) : ?>
                <div class="kotak"><?= $angka ?></div>
            <?php endforeach; ?>
            <div class="clear"></div>
        <?php endforeach; ?>
    </div>
</body>

</html>