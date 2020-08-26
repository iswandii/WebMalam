<?php
include 'functions.php';
$id = $_GET["id"];

if (hapusPostinganAutor($id) > 0) {
    echo '<script>alert ("postingan berhasil di hapus")
        window.location.href="../postingan_autor.php";
        </script>';
} else {
    echo '<script>alert ("postingan gagal di hapus")
        window.location.href="../postingan_autor.php";
        </script>';
}
