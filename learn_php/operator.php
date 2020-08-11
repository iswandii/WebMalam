<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator PHP</title>
</head>

<body>
    <?php
    $a = 5;
    $b = 4;

    echo "$a == $b :" . ($a == $b);
    echo "<br> $a != $b : " . ($a != $b);
    echo "<br> $a > $b : " . ($a > $b);
    echo "<br> $a < $b : " . ($a < $b);
    echo "<br> $a == $b && ($a > $b) : " . (($a != $b) && ($a > $b));
    echo "<br> $a == $b || ($a > $b) : " . (($a != $b) || ($a < $b));
    ?>
</body>

</html>