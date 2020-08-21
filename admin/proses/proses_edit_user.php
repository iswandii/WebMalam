<?php
include 'functions.php';

if (isset($_POST['update_user'])) {

    if (ubah_user($_POST) > 0) {
        echo '<script>alert ("data user berhasil di update")
        window.location.href="../data_user.php";
        </script>';
    } else {
        echo '<script>alert ("data user gagal di update")
        window.location.href="../edit_user.php";
        </script>';
    }
}
