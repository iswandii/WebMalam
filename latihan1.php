<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan </title>
</head>

<body>
    <?php
    $uang = 60000;
    $aqua = 3000;
    $mie = 2500;
    $saus = 5000;

    $total = (2 * $aqua) + (3 * $mie) + (1 * $saus);
    $kembalian = $uang - $total;
    echo "Uang yang harus dibayar Budi adalah $total <br>";
    echo "Kembalian yang diperoleh Budi adalah $kembalian";
    ?>
</body>

</html>