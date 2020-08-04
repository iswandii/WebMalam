<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat biodata dengan Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <style>
        body {
            background-color: rgb(188, 223, 252);
            font-family: 'Lato', sans-serif;
        }

        .header {
            display: flex;
            margin-bottom: 20px;
        }

        .main-title {
            font-size: 26px;
            text-transform: uppercase;
            border-bottom: 3px solid rgb(23, 169, 226);
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="header">
            <h1 class="main-title">Biodata</h1>
        </div>
        <div class="row">
            <div class="col col-lg-12">
                <table class="table table-borderless">
                    <form action="" method="post">
                        <tr>
                            <td class="title">
                                <label> Nama Lengkap</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="text" name="nama_lengkap">
                            </td>
                        </tr>

                        <tr>
                            <td class="title">
                                <label>Tanggal Lahir</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="date" name="tgl">
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label>Tempat Lahir</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="text" name="tempat_lahir">
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label>Jenis Kelamin</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="radio" name="jk" value="Laki - Laki">Laki - Laki
                                <input type="radio" name="jk" value="Perempuan">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Hobby</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="checkbox" name="membaca" value="Membaca">Membaca
                                <input type="checkbox" name="memasak" value="Memasak">Memasak</input>
                                <input type="checkbox" name="memancing" value="Memancing">Memancing</input>
                                <input type="checkbox" name="main_game" value="Main Game">Main Game</input>
                                <input type="checkbox" name="ngoding" value="Ngoding">Ngoding</input>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Alamat</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="textarea" name="alamat">
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Kabupaten / Kota</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <select name="kota" id="">
                                    <option value="">Pilih Kabupaten / Kota</option>
                                    <option value="Banda Aceh">Banda Aceh</option>
                                    <option value="Aceh Besar">Aceh Besar</option>
                                    <option value="Pidie">Pidie</option>
                                    <option value="Bireun">Bireun</option>
                                    <option value="Lhokseumawe">Lhokseumawe</option>
                                    <option value="Aceh Jaya">Aceh Jaya</option>
                                    <option value="Aceh Tengah">Aceh Tengah</option>
                                    <option value="Simeulu">Simeulu</option>
                                    <option value="Aceh Tamiang">Aceh Tamiang</option>
                                    <option value="Meulaboh">Meulaboh</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Pendidikan</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <select name="pendidikan" id="">
                                    <option value="">Pilih Pendidikan</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="S1">S1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Pekerjaan</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="textarea" name="pekerjaan">
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Agama</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <select name="agama" id="">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Foto Diri</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="file" name="foto">
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Password</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="password" name="password">
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Username</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="textarea" name="username">
                            </td>
                        </tr>
                </table>
                <input type="submit" name="input" value="Tampilkan">
                </form>

                <?php
                if (isset($_POST['input'])) {
                    $nama           = $_POST['nama_lengkap'];
                    $tgl            = $_POST['tgl'];
                    $tempat_lahir   = $_POST['tempat_lahir'];
                    $jk             = !empty($_POST['jk']) ? $_POST['jk'] : "";
                    $hobby1         = !empty($_POST['membaca']) ? $_POST['membaca'] : "";
                    $hobby2         = !empty($_POST['memasak']) ? $_POST['memasak'] : "";
                    $hobby3         = !empty($_POST['memancing']) ? $_POST['memancing'] : "";
                    $hobby4         = !empty($_POST['main_game']) ? $_POST['main_game'] : "";
                    $hobby5         = !empty($_POST['ngoding']) ? $_POST['ngoding'] : "";
                    $alamat         = $_POST['alamat'];
                    $kota           = $_POST['kota'];
                    $pendidikan     = !empty($_POST['pendidikan']) ? $_POST['pendidikan'] : "";
                    $pekerjaan      = $_POST['pekerjaan'];
                    $agama          = !empty($_POST['agama']) ? $_POST['agama'] : "";
                    $foto           = $_POST['foto'];
                    $password       = $_POST['password'];
                    $username       = $_POST['username'];

                    echo "$nama <br> $tgl <br> $tempat_lahir <br> $jk <br> $hobby1 <br> $hobby2 <br> $hobby3 <br> $hobby4 <br> $hobby5  <br> $alamat <br> $kota <br> $pendidikan <br> $pekerjaan <br> $agama <br> $foto <br> $password <br> $username";
                }

                ?>

                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.js"></script>
</body>

</html>