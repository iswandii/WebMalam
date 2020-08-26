<?php require 'header.php';
// ambil data di URL
$id = $_GET['id'];

// query data biodata_user berdasarkan id
$bd = query("SELECT * FROM biodata WHERE id_biodata='$id'")[0];
// var_dump($bd);
// die;
if (isset($_POST['update_biodata'])) {

    if (ubahBiodataUser($_POST) > 0) {
        echo '<script>alert ("data postingan berhasil di update")
    window.location.href="biodata_user.php";
    </script>';
    } else {
        echo '<script>alert ("data postingan gagal di update")
        window.location.href="edit_biodata_user.php";
        </script>';
    }
}


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
                            <input type="hidden" name="id_biodata" value="<?= $bd['id_biodata'] ?>">
                            <input type="hidden" name="fotoLama" value="<?= $bd['foto'] ?>">

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih User</label>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="id_user">
                                    <?php

                                    $user = query("SELECT * FROM user");

                                    foreach ($user as $data) : ?>
                                        <option value="<?= $data['id_user'] ?>"><?= $data['username'] . ' - ' . $data['level'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="<?= $bd['nama']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleInputName1" name="tgl_lahir" value="<?= $bd['tanggal_lahir']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Tempat Lahir</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Tempat Lahir" name="tmp_lahir" value="<?= $bd['tempat_lahir']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Jenis Kelamin</label>
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="jk" id="optionsRadios1" value="<?= !empty($bd['jenis_kelamin'] == "Laki-Laki") ? $bd['jenis_kelamin'] : '' ?>" <?php echo !empty($bd['jenis_kelamin'] == "Laki-Laki") ? 'checked' : '' ?>> Laki - Laki
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="jk" id="optionsRadios2" value="<?= !empty($bd['jenis_kelamin'] == "Perempuan") ? $bd['jenis_kelamin'] : '' ?>" <?php echo !empty($bd['jenis_kelamin'] == "Perempuan") ? 'checked' : '' ?>> Perempuan
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="<?= $bd['alamat']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Upload Foto</label>
                                <img src="gambar/biodata/<?= $bd['foto']; ?>" width="100px">
                                <input type="file" name="foto">
                            </div>

                            <button type="submit" class="btn btn-success mr-2" name="update_biodata">Update</button>
                            <button class="btn btn-light" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>