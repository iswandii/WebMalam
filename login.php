<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    $username = "Iswandi";
    $password = "admin";

    if ($username == "Iswandi" && $password == "admin") {
        echo "Selamat datang kembali $username";
    } else {
        echo "Username atau Password salah";
    }

    ?>
</body>

</html>