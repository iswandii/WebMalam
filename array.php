<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $nama = "Iswandi";
    $hewan = array("Kucing", "Kelinci", "Ayam");
    $tumbuhan = array("Rumput", "Mawar", "Sawi", "Bayam");
    $makanan = array("Ayam goreng", "Nasi goreng", "Ikan", "dedak");

    echo "$nama membeli $hewan[2] dan makanannya adalah $makanan[3] <br>";
    echo "" . $hewan[0][2] . $hewan[1][1] . $hewan[2][1];


    ?>
</body>

</html>