<?php 
require 'functions.php';

if (isset($_POST['edit_postingan'])) {

    if (ubah_postingan($_POST) > 0) {
        echo '<script>alert ("data postingan berhasil di update")
    window.location.href="postingan.php";
    </script>';
    } else {
        echo '<script>alert ("data postingan gagal di update")
    window.location.href="edit_postingan.php";
    </script>';
    }
}
