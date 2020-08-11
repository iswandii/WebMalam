<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data PHP</title>
</head>

<body>
    <?php
    $nim = "141272001";
    $nama = "Iswandi";
    $umur = 19;
    $nilai = 99;
    $status = false;

    echo "NIM :" . $nim . "<br>";
    echo "Nama :" . $nama . "<br>";
    echo "Umur : $umur <br>";
    echo "Nilai : $nilai <br>";
    printf("Nilai :%.2f <br>", $nilai);
    if ($status) {
        echo "Anda masih kuliah";
    } else {
        echo "Anda sudah tidak kuliah";
    }

    ?>
</body>

</html>