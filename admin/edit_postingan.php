<?php include 'header.php';
if (isset($_POST['edit_postingan'])) {

    if (ubah_postingan($_POST) > 0) {
        echo '<script>alert ("data postingan berhasil di update")
    window.location.href="postingan.php";
    </script>';
    } else {
        echo '<script>alert ("data postingan gagal di update")
    window.location.href="edit_postingan.php";
    </script>';
        var_dump($_POST);
        die;
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
                        ?>


                        <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_postingan" value="<?= $user['id_postingan']; ?>">
                            <input type="hidden" name="fotoLama" value="<?= $user['foto']; ?>">

                            <div class="form-group">
                                <label for="exampleInputName1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value=" <?= $user['judul'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Tanggal Release</label>
                                <input type="date" class="form-control" id="exampleInputName1" name="tgl_rilis" value=" <?= $user['tgl_rilis'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Foto Utama</label>
                                <img src="gambar/<?= $user['foto']; ?>">
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