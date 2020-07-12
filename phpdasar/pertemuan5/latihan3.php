<?php

$data = [
    ["gema nadia ramadhana", 1230040, "siskommm", "gemaadhanaa@gmail.com"],
    ["heryy raiso", 123230040, "siskommm", "raisoa@gmail.com"],
    ["candra danita", 1245630040, "siskommm", "dinattasa@gmail.com"]

]


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($data as $datum) : ?>
        <ul>
            <?php foreach ($datum as $datone) : ?>
                <li><?php echo $datone ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

</body>

</html>