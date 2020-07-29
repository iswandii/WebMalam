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

    <?php
    $username = "admin";
    $password = "admin";

    switch ($username) {
        case 'admin':
            echo "Selamat datang kembali Admin";
            break;
        case 'root':
            echo "Selamat datang kembali Operator";
            break;
        default:
            echo "Username dan Password anda salah";
            break;
    }
    ?>
</body>

</html>