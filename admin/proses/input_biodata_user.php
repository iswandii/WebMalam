<?php
include 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['input_biodata'])) {

    // cek apakah postingan berhasil ditambahkan atau tidak
    if (tambahBiodataUser($_POST) > 0) {
        echo '<script>alert ("Biodata User berhasil di input")
            window.location.href="../biodata_user.php";
            </script>';
    } else {
        echo '<script>alert ("Biodata User gagal di input")
            document.location.href="../biodata_user.php";
            </script>';
        mysqli_error($koneksi);
    }
}
