    <?php
    include 'functions.php';
    $id = $_GET["id"];

    if (hapus_user($id) > 0) {
        echo '<script>alert ("data user berhasil di hapus")
        window.location.href="../data_user.php";
        </script>';
    } else {
        echo '<script>alert ("data user gagal di hapus")
        window.location.href="../data_user.php";
        </script>';
    }

    ?>