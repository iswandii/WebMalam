<?php include 'header.php'; ?>

<?php

// --- Fungsi tambah data (Create)
function tambah($koneksi)
{
    if (isset($_POST['input_biodata'])) {
        $id = uniqid();
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];

        //cek dulu jika ada gambar produk jalankan coding ini
        if ($foto != "") {
            $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
            $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];
            $angka_acak     = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)

                $query_input = mysqli_query($koneksi, "INSERT INTO biodata (id_biodata,nama, tanggal_lahir, tempat_lahir, jenis_kelamin, alamat, foto) VALUES (md5('$id'),'$nama','$tgl_lahir','$tmp_lahir','$jk','$alamat','$foto')");
                // periska query apakah ada error
                if (!$query_input) {
                    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                        " - " . mysqli_error($koneksi));
                } else {
                    //tampil alert dan akan redirect ke halaman biodata.php
                    //silahkan ganti biodata.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='biodata.php';</script>";
                }
            } else {
                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='biodata.php';</script>";
            }
        } else {
            $query_input = mysqli_query($koneksi, "INSERT INTO biodata VALUES (md5('$id'),'$nama','$tgl_lahir','$tmp_lahir','$jk','$alamat',null)");
            // periska query apakah ada error
            if (!$query_input) {
                die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            } else {
                //tampil alert dan akan redirect ke halaman biodata.php
                echo "<script>alert('Data berhasil ditambah.');window.location='biodata.php';</script>";
            }
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
                                    <label for="exampleFormControlSelect2">Pilih Jenis Kelamin</label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="jk">
                                        <option value="Laki-Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
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
            $query_tampil = mysqli_query($koneksi, "SELECT * FROM biodata");
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
                                            <th>Nama</th>
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
                                                <td><img src="gambar/<?= $data['foto']; ?>"></t>
                                                <td>

                                                    <a href="biodata.php?aksi=delete&id=<?= $data['id_biodata']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                                                    <a href="biodata.php?aksi=update&id=<?= $data['id_biodata']; ?>&nama=<?= $data['nama']; ?>" class="btn btn-primary">Edit</a>
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

                if (isset($_POST['update_kategori'])) {
                    $id = $_POST['id_kategori'];
                    $nama_kategori = $_POST['nama_kategori'];

                    if (!empty($nama_kategori)) {
                        $query_update = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id'");
                        if ($query_update && isset($_GET['aksi'])) {
                            if ($_GET['aksi'] == 'update') {
                                echo '<script>alert("Data berhasil di update");
                                window.location.href="kategori.php";
                                </script>';
                            } else {
                                echo '<script>alert("Data gagal di update")</script>';
                            }
                        }
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
                                            <h4 class="card-title">Form Data Kategori</h4>
                                            <p class="card-description"> Masukkan Kategori </p>
                                            <form class="forms-sample" action="" method="POST">
                                                <input type="hidden" name="id_kategori" value="<?= $_GET['id'] ?>">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Nama Kategori</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kategori" name="nama_kategori" value="<?= $_GET['nama_kategori'] ?>" required>
                                                </div>

                                                <button type="submit" class="btn btn-success mr-2" name="update_kategori">Submit</button>
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

                                $query_hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id'");

                                if ($query_hapus) {
                                    if ($_GET['aksi'] == 'delete') {
                                        echo '<script>alert("Data berhasil dihapus");
                                        window.location.href="kategori.php";</script>';
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