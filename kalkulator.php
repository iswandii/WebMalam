<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <style>
        table {
            background-color: black;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <td colspan="4"><input type="text" name="angka" id="angka" placeholder="0"></td>
        </tr>
        <tr>
            <td><button type="submit">AC</button></td>
            <td><button type="submit">&plusmn;</button></td>
            <td><button type="submit">%</button></td>
            <td><button type="submit">&divide;</button></td>
        </tr>
        <tr>
            <td><button type="submit">7</button></td>
            <td><button type="submit">8</button></td>
            <td><button type="submit">9</button></td>
            <td><button type="submit">&times;</button></td>
        </tr>
        <tr>
            <td><button type="submit">4</button></td>
            <td><button type="submit">5</button></td>
            <td><button type="submit">6</button></td>
            <td><button type="submit">-</button></td>
        </tr>
        <tr>
            <td><button type="submit">1</button></td>
            <td><button type="submit">2</button></td>
            <td><button type="submit">3</button></td>
            <td><button type="submit">+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">0</button></td>
            <td><button type="submit">.</button></td>
            <td><button type="submit">=</button></td>
        </tr>

    </table>
    <hr>
    <form action="" method="post">
        <input type="number" name="angka1" id="angka1" value="0">
        <input type="number" name="angka2" id="angka2" value="0">
        <br>
        <input class="btn btn-primary" type="submit" value="+" name="tambah">
        <input class="btn btn-danger" type="submit" value="-" name="kurang">
        <input class="btn btn-success" type="submit" value="x" name="kali">
        <input class="btn btn-warning" type="submit" value=":" name="bagi">
    </form>
    <?php
    if (isset($_POST['tambah'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $tambah = $angka1 + $angka2;
    } elseif (isset($_POST['kurang'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $kurang = $angka1 - $angka2;
    } elseif (isset($_POST['kali'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $kali = $angka1 * $angka2;
    } elseif (isset($_POST['bagi'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $bagi = $angka1 / $angka2;
    } else {
        echo "ada yang error";
    }

    ?>
    <?php
    echo !empty($tambah) ? $tambah : "";
    echo !empty($kurang) ? $kurang : "";
    echo !empty($kali) ? $kali : "";
    echo !empty($bagi) ? $bagi : "";
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>