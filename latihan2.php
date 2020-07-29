<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 1) {
            echo "Ini bilangan ganjil $i <br>";
        } else {
            echo "Ini bilangan genap $i <br>";
        }
    }
    ?>
    <hr>
    <!-- <?php
            for ($i = 2; $i <= 64; $i++) {
                if ($i == 2) {
                    echo "$i<br>";
                } elseif ($i == 4) {
                    echo "$i<br>";
                } elseif ($i == 8) {
                    echo "$i<br>";
                } elseif ($i == 16) {
                    echo "$i<br>";
                } elseif ($i == 32) {
                    echo "$i<br>";
                } elseif ($i == 64) {
                    echo "$i<br>";
                }
            }
            ?>
    <hr>
    <?php
    for ($i = 3; $i <= 18; $i++) {
        if ($i == 3) {
            echo "$i<br>";
        } elseif ($i == 6) {
            echo "$i<br>";
        } elseif ($i == 9) {
            echo "$i<br>";
        } elseif ($i == 12) {
            echo "$i<br>";
        } elseif ($i == 15) {
            echo "$i<br>";
        } elseif ($i == 18) {
            echo "$i<br>";
        }
    }
    ?>
    <hr>
    <?php
    for ($i = 3; $i <= 127; $i++) {
        if ($i == 3) {
            echo "$i<br>";
        } elseif ($i == 7) {
            echo "$i<br>";
        } elseif ($i == 15) {
            echo "$i<br>";
        } elseif ($i == 31) {
            echo "$i<br>";
        } elseif ($i == 63) {
            echo "$i<br>";
        } elseif ($i == 127) {
            echo "$i<br>";
        }
    }
    ?> -->

    <?php
    for ($i = 2; $i <= 64; $i *= 2)
        echo $i;
    ?>
    <hr>
    <?php
    for ($i = 3; $i <= 18; $i += 3)
        echo $i;
    ?>
    <hr>
    <?php
    for ($i = 1; $i <= 127; $i *= 2)
        echo $i + 3;
    ?>
</body>

</html>