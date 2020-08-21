<?php
include 'functions.php';
$id = $_GET["id"];

if (hapus_postingan($id) > 0) {
    echo '<script>alert ("postingan berhasil di hapus")
        window.location.href="../postingan.php";
        </script>';
} else {
    echo '<script>alert ("postingan gagal di hapus")
        window.location.href="../postingan.php";
        </script>';
}
