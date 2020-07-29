<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan </title>
</head>

<body>
    <?php

    for ($i = 1; $i < 5; $i++) {
        echo "Are u okay ? <br>";
    }
    //  ! Contoh 1 
    for ($i = 0; $i <= 10; $i++) {
        echo $i;
    }
    echo "<br>";

    // ! Contoh 2
    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }
    echo "<br>";

    // ! Contoh 3 
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo "$i";
        $i++;
    }
    echo "<br><br>";

    // ! Contoh 4 
    for ($i = 1; $i <= 10; print "$i", $i++);
    ?>
    <hr>
    <?php
    // !metode membuat looping lewat html
    $a = 1;
    for ($a = 1; $a < 5; $a++) {


    ?>
        <form action="">
            <label>
                Username
                <input type="text" name="username">
            </label>
        </form>
    <?php

    }
    ?>

    <?php
    // !membuat contoh foreach
    // *menampilkan jumlah nilai yang sama sebanyak jumlah array
    $hewan = array('ayam', 'kamning', 'kucing', 'sapi');
    foreach ($hewan as $key => $value) {
        echo "" . $hewan[2];
    }
    ?>

    <?php
    //* menampilkan jumlah angka yang dipilih dengan array sebanyak jumlah array
    $angka = array(1, 2, 3, 4);
    foreach ($angka as $key => $value) {
        echo "" . $angka[2] * $angka[3];
    }
    ?>

    <?php
    // * menampilkan jumlah nilai yang sama sebanyak jumlah array
    $hewan = array('ayam', 'kamning', 'kucing', 'sapi');
    foreach ($hewan as $key => $value) {
        echo "" . $value[1];
    }
    ?>

</body>

</html>