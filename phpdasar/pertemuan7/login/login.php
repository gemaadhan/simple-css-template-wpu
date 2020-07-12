<?php
//apakah tombol submit sudah ditekan ?
//cek user name dan password, jika benar, redirect ke admin, jika salah tampilakn pesan kesalajhan

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == 123) {

        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <?php if (isset($error)) : ?>
        <p>username / password salah</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>

        </form>
    </ul>
</body>

</html>