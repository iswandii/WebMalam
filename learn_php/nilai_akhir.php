<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akhir</title>
</head>

<body>
    <form action="">

    </form>

    <?php
    $quiz = 100;
    $tugas = 100;
    $uts = 100;
    $uas = 100;

    $nilai_akhir = ((0.10 * $quiz) + (0.20 * $tugas) + (0.30 * $uts) + (0.40 * $uas));

    if ($nilai_akhir >= 85) {
        echo "Grade A";
    } elseif ($nilai_akhir >= 73) {
        echo "Grade B";
    } elseif ($nilai_akhir >= 65) {
        echo "Grade C";
    } elseif ($nilai_akhir >= 50) {
        echo "Grade D";
    } else {
        echo "Grade E";
    }



    ?>
</body>

</html>