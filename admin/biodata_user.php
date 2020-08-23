<?php include 'header.php'; ?>

<?php

// --- Fungsi tambah data (Create)
function tambah($koneksi)
{
    if (isset($_POST['input_biodata'])) {
        $id = uniqid();
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];

        //cek dulu jika ada gambar produk jalankan coding ini
        if (move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $_FILES['foto']['name'])) {
            echo "Gambar berhasil di upload ";
        } else {
            echo "Gambar  gagal di upload ";
        }

        // $query_input = mysqli_query($koneksi, "INSERT INTO biodata (id_biodata,nama, tanggal_lahir, tempat_lahir, jenis_kelamin, alamat, foto) VALUES (md5('$id'),'$nama','$tgl_lahir','$tmp_lahir','$jk','$alamat','$foto')");

        $query_input = mysqli_query($koneksi, "INSERT INTO biodata VALUES (md5('$id'),$nama,$tgl_lahir,$tmp_lahir,$jk,$alamat,$foto,$id_user)");
        // periska query apakah ada error
        if (!$query_input) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman biodata.php
            echo "<script>alert('Data berhasil ditambah.');window.location='biodata_user.php';</script>";
        }


        //     if (!empty($nama) && !empty($tgl_lahir) && !empty($tmp_lahir) && !empty($jk) && !empty($alamat) || !empty($foto)) {
        //         $query_input = mysqli_query($koneksi, "INSERT INTO biodata VALUES ( md5('$id'),'$nama','$tgl_lahir','$tmp_lahir','$jk','$alamat','$foto' )");
        //         if ($query_input && isset($_GET['aksi'])) {
        //             if ($_GET['aksi'] == 'create') {
        //                 echo '<script>alert("Data gagal disimpan");
        //                 window.location.href="biodata.php"
        //                 </script>';
        //             }
        //         }
        //     } else {
        //         echo '<script>alert("Data gagal disimpan")</script>';
        //     }
    }

?>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Data Biodata</h4>
                            <p class="card-description"> Masukkan Biodata </p>
                            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih User</label>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_user">
                                        <?php

                                        $show = mysqli_query($koneksi, "SELECT * FROM user");

                                        while ($data = mysqli_fetch_array($show)) {

                                        ?>
                                            <option value="<?= $data['id_user'] ?>"><?= $data['username'] . ' - ' . $data['level'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="exampleInputName1" name="tgl_lahir" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Tempat Lahir" name="tmp_lahir" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Jenis Kelamin</label>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jk" id="optionsRadios1" value="Laki-Laki"> Laki - Laki
                                        </label>
                                    </div>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jk" id="optionsRadios2" value="Perempuan"> Perempuan
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" required>
                                </div>

                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input type="file" name="foto">
                                </div>

                                <button type="submit" class="btn btn-success mr-2" name="input_biodata">Submit</button>
                                <button class="btn btn-light" type="reset">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- function menampilkan data di tabel -->
            <?php
        }
        //--- Tutup Fungsi Tambah Data (Create)

        //--- FUngsi Baca Data (Read)
        function tampil_data($koneksi)
        {
            $query_tampil = mysqli_query($koneksi, "SELECT * FROM biodata b LEFT JOIN user u USING(id_user) ");
            if (!$query_tampil) {
                die("Query Error" . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
            }
            ?>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tabel Data User</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="example">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <!-- Proses menampilkan data dari database -->
                                        <?php

                                        //buat perulangan untuk element tabel dari data biodata
                                        $no = 1; //variabel untuk membuat nomor urut
                                        // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                        // kemudian dicetak dengan perulangan while
                                        while ($data = mysqli_fetch_assoc($query_tampil)) {
                                        ?>
                                            <tr>
                                                <th><?= $no; ?></th>
                                                <td><?= $data['nama'];  ?></td>
                                                <td><?= $data['tanggal_lahir']; ?></td>
                                                <td><?= $data['tempat_lahir']; ?></td>
                                                <td><?= $data['jenis_kelamin']; ?></td>
                                                <td><?= $data['alamat']; ?></td>
                                                <td><img src="gambar/<?= $data['foto']; ?>"></td>
                                                <td>

                                                    <a href="biodata_user.php?aksi=delete&id=<?= $data['id_biodata']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                                                    <a href="biodata_user.php?aksi=update&id=<?= $data['id_biodata']; ?>&nama=<?= $data['nama']; ?>&tgl_lahir=<?= $data['tanggal_lahir']; ?>&tmp_lahir=<?= $data['tempat_lahir']; ?>&jk=<?= $data['jenis_kelamin']; ?>&alamat=<?= $data['alamat']; ?>&foto=<?= $data['foto']; ?>" class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
            }
            // --- Tutup Fungsi Baca Data (Read)

            // Fungsi Ubah Data (Update)
            function ubah($koneksi)
            {

                if (isset($_POST['update_biodata'])) {
                    $id = $_POST['id_biodata'];
                    $id_user = $_POST['id_user'];
                    $nama = $_POST['nama'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $tmp_lahir = $_POST['tmp_lahir'];
                    $jk = $_POST['jk'];
                    $alamat = $_POST['alamat'];
                    $foto = $_FILES['foto']['name'];

                    //cek dulu jika ada gambar produk jalankan coding ini
                    if (move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $_FILES['foto']['name'])) {
                        echo "Gambar berhasil di upload";
                    } else {
                        echo "Gambar  gagal di upload";
                    }
                    $query_update = mysqli_query($koneksi, "UPDATE biodata SET nama='$nama', tanggal_lahir='$tgl_lahir', tempat_lahir='$tmp_lahir', jenis_kelamin='$jk', alamat='$alamat', foto='$foto' WHERE id_biodata='$id' ");

                    // periska query apakah ada error
                    if (!$query_update) {
                        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                            " - " . mysqli_error($koneksi));
                    } else {
                        //tampil alert dan akan redirect ke halaman biodata.php
                        echo "<script>alert('Data berhasil ditambah.');window.location='biodata_user.php';</script>";
                    }
                }


                // tampilan form ubah
                if (isset($_GET['id'])) {
                ?>

                    <div class="main-panel">
                        <div class="content-wrapper">
                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Form Data Biodata</h4>
                                            <p class="card-description"> Masukkan Biodata User </p>
                                            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="id_biodata" value="<?= $_GET['id'] ?>">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Nama</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="<?= $_GET['nama']; ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="exampleInputName1" name="tgl_lahir" value="<?= $_GET['tgl_lahir']; ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Tempat Lahir" name="tmp_lahir" value="<?php echo $_GET['tmp_lahir']; ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Jenis Kelamin</label>
                                                    <div class="form-radio">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="jk" id="optionsRadios1" value="Laki-Laki"> Laki - Laki
                                                        </label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="jk" id="optionsRadios2" value="Perempuan"> Perempuan
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Alamat</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="<?= $_GET['alamat']; ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Upload Foto</label>
                                                    <input type="file" name="foto" value="<?= $_GET['foto']; ?>">
                                                </div>

                                                <button type="submit" class="btn btn-success mr-2" name="update_biodata">Submit</button>
                                                <button class="btn btn-light" type="reset">Reset</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                        <?php
                    }
                }

                        ?>

                        <?php
                        function hapus($koneksi)
                        {
                            if (isset($_GET['id']) && isset($_GET['aksi'])) {
                                $id = $_GET['id'];

                                $query_hapus = mysqli_query($koneksi, "DELETE FROM biodata WHERE id_biodata='$id'");

                                if ($query_hapus) {
                                    if ($_GET['aksi'] == 'delete') {
                                        echo '<script>alert("Data berhasil dihapus");
                                        window.location.href="biodata.php";</script>';
                                    }
                                }
                            }
                        }
                        // --- Tutup Fungsi Hapus


                        // ===================================================================
                        // logika proses aksinya || Program Utama
                        if (isset($_GET['aksi'])) {
                            switch ($_GET['aksi']) {
                                case 'create':
                                    tambah($koneksi);
                                    break;
                                case 'update':
                                    ubah($koneksi);
                                    break;
                                case 'delete':
                                    hapus($koneksi);
                                    break;
                                default:
                                    tambah($koneksi);
                                    tampil_data($koneksi);
                                    break;
                            }
                        } else {
                            tambah($koneksi);
                            tampil_data($koneksi);
                        }
                        ?>

                        <?php include 'footer.php' ?>