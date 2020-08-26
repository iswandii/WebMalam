<?php include 'header.php'; ?>

<?php

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['input_postingan'])) {

    // cek apakah postingan berhasil ditambahkan atau tidak
    if (tambahPostinganAutor($_POST) > 0) {
        echo '<script>alert ("postingan berhasil di input")
            window.location.href="postingan_autor.php";
            </script>';
    } else {
        echo '<script>alert ("postingan gagal di input")
            document.location.href="postingan_autor.php";
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
                        <h4 class="card-title">Form Postingan</h4>
                        <p class="card-description"> Masukkan Postingan </p>

                        <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputName1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Tanggal Release</label>
                                <input type="date" class="form-control" id="exampleInputName1" name="tgl_rilis" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Foto Utama</label>
                                <input type="file" class="form-control" id="exampleInputName1" name="foto">
                            </div>

                            <div class="form-group">
                                <textarea id="content" name="konten"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success mr-2" name="input_postingan">Submit</button>
                            <button class="btn btn-light" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Data User</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered data" id="example">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th>Judul</th>
                                        <th>Tanggal Release</th>
                                        <th>Foto Utama</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Proses menampilkan data dari database -->

                                    <?php
                                    $id_user = $_SESSION['id_user'];
                                    $user = query("SELECT * FROM postingan WHERE id_user='$id_user'");
                                    $no = 1;
                                    // var_dump($user);
                                    // die;
                                    foreach ($user as $data) : ?>
                                        <tr>
                                            <th><?= $no; ?></th>
                                            <td><?= $data['judul'];  ?></td>
                                            <td><?= $data['tgl_rilis']; ?></td>
                                            <td><img src="gambar/postingan/<?= $data['foto']; ?>"></td>
                                            <td>
                                                <a href="proses/hapus_postingan_autor.php?id=<?= $data['id_postingan']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                                                <a href="edit_postingan_autor.php?id=<?= $data['id_postingan']; ?>" class="btn btn-primary">Edit</a>
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