<?php
include 'koneksi.php';
if (isset($_POST['update_user'])) {
    $id = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $level = $_POST['level'];

    $query_update = mysqli_query($koneksi, "UPDATE user SET username='$username',email='$email',password=md5('$password'),no_hp='$no_hp',level='$level' WHERE id_user='$id'");

    if ($query_update) {
        echo '<script>alert ("data user berhasil di update")
        window.location.href="../data_user.php";
        </script>';
    } else {
        echo '<script>alert ("data user gagal di update")
        window.location.href="../edit_user.php";
        </script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
