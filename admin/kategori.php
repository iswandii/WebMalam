    <?php include 'header.php'; ?>

    <?php

    // --- Fungsi tambah data (Create)
    function tambah($koneksi)
    {
        if (isset($_POST['input_kategori'])) {
            $id = uniqid();
            $nama_kategori = $_POST['nama_kategori'];

            if (!empty($nama_kategori)) {
                $query_input = "INSERT INTO kategori VALUES (md5('$id'),'$nama_kategori')";
                $simpan = mysqli_query($koneksi, $query_input);
                if ($simpan && isset($_GET['aksi'])) {
                    if ($_GET['aksi'] == 'create') {
                        echo '<script>alert("Data gagal disimpan");
                        window.location.href="kategori.php"
                        </script>';
                    }
                }
            } else {
                echo '<script>alert("Data gagal disimpan")</script>';
            }
        }

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

                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Kategori</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kategori" name="nama_kategori" required>
                                    </div>

                                    <button type="submit" class="btn btn-success mr-2" name="input_kategori">Submit</button>
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
                $sql = "SELECT * FROM kategori";
                $query = mysqli_query($koneksi, $sql);
                ?>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Kategori</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered data" id="example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- Proses menampilkan data dari database -->

                                            <?php
                                            $no = 1;
                                            while ($data = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr>
                                                    <th><?php echo $no; ?></th>
                                                    <td><?php echo $data['nama_kategori'];  ?></td>
                                                    <td>
                                                        <a href="kategori.php?aksi=delete&id=<?php echo $data['id_kategori']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                                                        <a href="kategori.php?aksi=view&id=<?php echo $data['id_kategori']; ?>" class="btn btn-success">View</a>
                                                        <a href="kategori.php?aksi=update&id=<?php echo $data['id_kategori']; ?>&nama_kategori=<?php echo $data['nama_kategori']; ?>" class="btn btn-primary">Edit</a>
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
                                                    <input type="hidden" name="id_kategori" value="<?php echo $_GET['id'] ?>">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Nama Kategori</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kategori" name="nama_kategori" value="<?php echo $_GET['nama_kategori'] ?>" required>
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