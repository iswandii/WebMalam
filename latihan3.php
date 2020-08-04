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
                                <input type="radio" name="jenis" value="Laki - Laki">Laki - Laki
                                <input type="radio" name="jenis" value="Perempuan">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Hobby</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <input type="checkbox" name="hobby">Membaca
                                <input type="checkbox" name="hobby">Memasak</input>
                                <input type="checkbox" name="hobby">Memancing</input>
                                <input type="checkbox" name="hobby">Main Game</input>
                                <input type="checkbox" name="hobby">Ngoding</input>
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
                                    <option value="">Banda Aceh</option>
                                    <option value="">Aceh Besar</option>
                                    <option value="">Pidie</option>
                                    <option value="">Bireun</option>
                                    <option value="">Lhokseumawe</option>
                                    <option value="">Aceh Jaya</option>
                                    <option value="">Aceh Tengah</option>
                                    <option value="">Simeulu</option>
                                    <option value="">Aceh Tamiang</option>
                                    <option value="">Meulaboh</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">
                                <label> Pendidikan</label>
                            </td>
                            <td class="sign">:</td>
                            <td>
                                <select name="kota" id="">
                                    <option value="">SD Muhammadiyah I Banda Aceh</option>
                                    <option value="">SD Negeri 1 Banda Aceh</option>
                                    <option value="">SD Negeri 2 Banda Aceh</option>
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
                                <input type="textarea" name="agama">
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
                    $jk             = $_POST['jenis'];
                    $hobby          = $_POST['hobby'];
                    $alamat         = $_POST['alamat'];
                    $kota           = $_POST['kota'];
                    $pendidikan     = $_POST['pendidikan'];
                    $pekerjaan      = $_POST['pekerjaan'];
                    $agama          = $_POST['agama'];
                    $foto           = $_POST['foto'];
                    $password       = $_POST['password'];
                    $username       = $_POST['username'];

                    echo "$nama <br> $tgl <br> $tempat_lahir <br> $jk <br> $hobby <br> $alamat <br> $kota <br> $pendidikan <br> $pekerjaan <br> $agama <br> $foto <br> $password <br> $username";
                }

                ?>

                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.js"></script>
</body>

</html>