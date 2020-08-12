    <?php
    include 'koneksi.php';

    if (isset($_POST['regis'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $ps = !empty($_POST['persetujuan']) ? $_POST['persetujuan'] : '';
        $level = 'autor';

        $query_input = mysqli_query($koneksi, "INSERT INTO user VALUES (md5('$id'),'$username','$email',md5('$password'),'$no_hp','$ps','$level')");

        if ($query_input) {
            echo "<script>alert('data berhasil di input')
            window.location.href='../login.php';
            </script>";
        } else {
            echo "<script>alert('data gagal di input')
            window.location.href='../register.php';
            </script>";
        }
    }

    ?>