<?php include 'header.php';


if (isset($_POST['edit_postingan'])) {

    if (ubahPostinganAutor($_POST) > 0) {
        echo '<script>alert ("data postingan berhasil di update")
    window.location.href="postingan_autor.php";
    </script>';
    } else {
        echo '<script>alert ("data postingan gagal di update")
    window.location.href="edit_postingan_autor.php";
    </script>';
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
                        <h4 class="card-title">Form Edit Postingan</h4>
                        <p class="card-description"> Silahkan Edit Postingan </p>

                        <?php

                        // ambil data di URL 
                        $id = $_GET['id'];

                        // query data postingan berdasarkan id
                        $user = query("SELECT * FROM postingan WHERE id_postingan='$id'")[0];
                        // var_dump($user);
                        // die;
                        ?>


                        <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_postingan" value="<?= $user['id_postingan']; ?>">
                            <input type="hidden" name="fotoLama" value="<?= $user['foto']; ?>">
                            <input type="hidden" name="id_user" value="<?= $bd['id_user'] ?>">

                            <div class="form-group">
                                <label for="exampleInputName1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value=" <?= $user['judul'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Tanggal Release</label>
                                <input type="date" class="form-control" id="exampleInputName1" name="tgl_rilis" value=" <?= $user['tgl_rilis'] ?>" required>
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
                                <img src="gambar/postingan/<?= $user['foto']; ?>" width="100px">
                                <input type="file" class="form-control" id="exampleInputName1" name="foto" value="<?= $user['foto']; ?>">
                            </div>

                            <div class="form-group">
                                <textarea id="content" name="konten" value=" <?= $user['konten'] ?>"></textarea>
                            </div>


                            <button type="submit" class="btn btn-success mr-2" name="edit_postingan">Submit</button>
                            <button class="btn btn-light" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php include 'footer.php' ?>