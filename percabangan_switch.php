<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan Switch Case</title>
</head>

<body>
    <?php
    $bulan = "Januari";

    switch ($bulan) {
        case 'Januari':
            echo "Anda memilih bulan Januari";
            break;

        default:
            echo "Anda belum melilih bulan";
            break;
    }
    ?>

    <br>

    <?php

    $username = "iswandi";
    $password = "operator";
    //! Metode Switch menggunakan Array

    switch ([$username, $password]) {
        case ['admin', 'admin']:
            echo "Selamat datang kembali Admin";
            break;
        case ['iswandi', 'operator']:
            echo "Selamat datang kembali Operator";
            break;
        default:
            echo "Username dan Password anda salah";
            break;
    }
    ?>

    <br>

    <?php
    $username = "admin";
    $password = "1234";

    //! Metode menggunakan dua switch
    switch ($username == "admin" && $password == "1234") {
        case 'admin' && '1234':
            echo "Selamat datang kembali Admin <br>";
            break;
        default:
            echo "Username dan Password anda salah";
            break;
    }
    switch ($username == "operator" && $password == "1111") {
        case ['operator', '1111']:
            echo "Selamat datang kembali Operator";
            break;
        default:
            echo "Username dan Password anda salah";
            break;
    }
    ?>

    <br>

    <?php
    $username = "operator";
    $password = "1111";

    // ! Menggunakan metode True
    switch (true) {
        case ($username == "admin" && $password == "1234"):
            echo "Selamat datang kembali Admin";
            break;

        case ($username == "operator" && $password == "1111"):
            echo "Selamat datang kembali Operator";
            break;

        default:
            echo "Username dan Password anda salah";
            break;
    }
    ?>
</body>

</html>