<?php include 'header.php'; ?>

<?php

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['input_biodata'])) {

    // cek apakah postingan berhasil ditambahkan atau tidak
    if (tambahBiodata($_POST) > 0) {
        echo '<script>alert ("Biodata berhasil di input")
            window.location.href="biodata.php";
            </script>';
    } else {
        echo '<script>alert ("Biodata gagal di input")
            document.location.href="biodata.php";
            </script>';
        mysqli_error($koneksi);
    }
}

?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Data User</h4>
                        <p class="card-description"> Masukkan Data User </p>
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



            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Biodata</h4>
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
                                    $id_user = $_SESSION['id_user'];
                                    $user = query("SELECT * FROM biodata WHERE id_user='$id_user'");
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

                                                <a href="proses/hapus_biodata.php?aksi=delete&id=<?= $data['id_biodata']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                                                <a href="edit_biodata.php?aksi=update&id=<?= $data['id_biodata']; ?>" class="btn btn-primary">Edit</a>
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