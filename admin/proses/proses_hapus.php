    <?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $query_delete = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
    if ($query_delete) {
        echo '<script>alert ("data user berhasil di hapus")
        window.location.href="../data_user.php";
        </script>';
    } else {
        echo '<script>alert ("data user gagal di hapus")
        window.location.href="../data_user.php";
        </script>';
    }

    ?>