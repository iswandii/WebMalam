<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata With Metode POST</title>
</head>

<body>
    <form action="" method="POST">
        <label>
            Nama :
            <input type="text" name="nama">
        </label>
        <label>
            Tanggal Lahir
            <input type="date" name="tgl">
        </label>
        <input type="submit" name="input" value="Tampilkan">
    </form>

    <?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        $tgl  = $_POST['tgl'];

        echo "$nama <br> $tgl";
    }
    ?>

</body>

</html>