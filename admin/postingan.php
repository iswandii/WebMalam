<?php include 'header.php'
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

                        <form class="forms-sample" action="proses/input_postingan.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputName1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Tanggal Release</label>
                                <input type="date" class="form-control" id="exampleInputName1" name="tgl_rilis" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Kategori</label>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_kategori">
                                    <?php

                                    $show = query("SELECT * FROM kategori k LEFT JOIN postingan p USING(id_kategori)");

                                    foreach ($show as $data) : ?>

                                        <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                                    <?php endforeach; ?>

                                </select>
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
                                    $user = query("SELECT * FROM postingan");
                                    $no = 1;
                                    foreach ($user as $data) : ?>
                                        <tr>
                                            <th><?= $no; ?></th>
                                            <td><?= $data['judul'];  ?></td>
                                            <td><?= $data['tgl_rilis']; ?></td>
                                            <td><img src="gambar/postingan<?= $data['foto']; ?>"></td>
                                            <td>
                                                <a href="proses/hapus_postingan.php?id=<?= $data['id_postingan']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                                                <a href="edit_postingan.php?id=<?= $data['id_postingan']; ?>" class="btn btn-primary">Edit</a>
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