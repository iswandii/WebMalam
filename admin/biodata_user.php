<?php include 'header.php'; ?>

<?php

// --- Fungsi tambah data (Create)
// function tambah($koneksi)
// {
//     if (isset($_POST['input_biodata'])) {
//         $id = uniqid();
//         $id_user = $_POST['id_user'];
//         $nama = $_POST['nama'];
//         $tgl_lahir = $_POST['tgl_lahir'];
//         $tmp_lahir = $_POST['tmp_lahir'];
//         $jk = $_POST['jk'];
//         $alamat = $_POST['alamat'];
//         $foto = $_FILES['foto']['name'];

//         //cek dulu jika ada gambar produk jalankan coding ini
//         if (move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/biodata' . $_FILES['foto']['name'])) {
//             echo "Gambar berhasil di upload ";
//         } else {
//             echo "Gambar  gagal di upload ";
//         }

//         // $foto = uploadBiodata();
//         // if (!$foto) {
//         //     return false;
//         // }

//         // $query_input = mysqli_query($koneksi, "INSERT INTO biodata (id_biodata,nama, tanggal_lahir, tempat_lahir, jenis_kelamin, alamat, foto) VALUES (md5('$id'),'$nama','$tgl_lahir','$tmp_lahir','$jk','$alamat','$foto')");

//         $query_input = mysqli_query($koneksi, "INSERT INTO biodata VALUES (md5('$id'),$nama,$tgl_lahir,$tmp_lahir,$jk,$alamat,$foto,$id_user)");
//         // periska query apakah ada error
//         if (!$query_input) {
//             die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
//                 " - " . mysqli_error($koneksi));
//         } else {
//             //tampil alert dan akan redirect ke halaman biodata.php
//             echo "<script>alert('Data berhasil ditambah.');window.location='biodata_user.php';</script>";
//         }


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
// }

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
                        <form class="forms-sample" action="proses/input_biodata_user.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih User</label>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_user">
                                    <?php

                                    $user = query("SELECT * FROM user");
                                    $no = 1;
                                    foreach ($user as $data) : ?>

                                        ?>
                                        <option value="<?= $data['id_user'] ?>"><?= $data['username'] . ' - ' . $data['level'] ?></option>
                                    <?php endforeach; ?>

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
                                    $user = query("SELECT * FROM biodata");
                                    $no = 1;
                                    foreach ($user as $data) : ?>
                                        <tr>
                                            <th><?= $no; ?></th>
                                            <td><?= $data['nama'];  ?></td>
                                            <td><?= $data['tanggal_lahir']; ?></td>
                                            <td><?= $data['tempat_lahir']; ?></td>
                                            <td><?= $data['jenis_kelamin']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <td><img src="gambar/biodata/<?= $data['foto']; ?>"></td>
                                            <td>

                                                <a href="proses/hapus_biodata_user.php?aksi=delete&id=<?= $data['id_biodata']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                                                <a href="edit_biodata_user.php?aksi=update&id=<?= $data['id_biodata']; ?>" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'footer.php' ?>