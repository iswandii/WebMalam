    <?php
    include 'functions.php';
    // cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST['input_user'])) {

        // cek apakah data berhasil ditambahkan atau tidak
        if (tambah_user($_POST) > 0) {
            echo '<script>alert ("data user berhasil di input")
            window.location.href="../data_user.php";
            </script>';
        } else {
            echo '<script>alert ("data user gagal di input")
            document.location.href="../data_user.php";
            </script>';
        }
    }

    ?>