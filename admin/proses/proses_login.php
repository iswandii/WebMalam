    <?php
    session_start();
    include 'koneksi.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // query menampilkan username dan password
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username' AND password='$password'");
        $cek = mysqli_num_rows($query);
        $data = mysqli_fetch_assoc($query);

        // logika login
        if ($cek > 0) {
            if ($data['level'] == 'admin') {
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = $data['level'];
                $_SESSION['id_user'] = $data['id_user'];

                echo "<script>alert('Selamat datang Admin')
            window.location.href='../index.php';
            </script>";
                // header('location:../index.php');
            } else if ($data['level'] == 'operator') {
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = $data['level'];
                $_SESSION['id_user'] = $data['id_user'];

                echo "<script>alert('Selamat datang Operator')
        window.location.href='../index.php';
        </script>";
            } else if ($data['level'] == 'autor') {
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = $data['level'];
                $_SESSION['id_user'] = $data['id_user'];

                echo "<script>alert('Selamat datang Autor')
        window.location.href='../index.php';
        </script>";
            } else {
                header('location:../login.php');
            }
        }
    }
    ?>