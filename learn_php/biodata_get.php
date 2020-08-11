<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Melalui GET</title>
</head>

<body>
    <form action="" method="GET">
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
    if (isset($_GET['input'])) {
        $nama = $_GET['nama'];
        $tgl  = $_GET['tgl'];

        echo "$nama <br> $tgl";
    }
    ?>
</body>

</html>