<?php
include 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['input_postingan'])) {

    // cek apakah postingan berhasil ditambahkan atau tidak
    if (tambah_postingan($_POST) > 0) {
        // echo '<script>alert ("postingan berhasil di input")
        //     window.location.href="../postingan.php";
        //     </script>';
    } else {
        // echo '<script>alert ("postingan gagal di input")
        //     document.location.href="../postingan.php";
        //     </script>';
        mysqli_error($koneksi);
    }
}
