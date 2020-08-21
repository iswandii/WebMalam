<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "web_berita");

// ambil data dari tabel user / query data user
// $result= mysqli_query($koneksi, "SELECT * FROM user"); 

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() => mengembalikan array numerik
// mysqli_fetch_assoc => mengembalikan array associative
// mysqli_fetch_array() => mengembalikan keduanya
// mysqli_fetch_object() => mengembalikan object


function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query); // result adalah lemarinya
    $rows = []; // wadah kosong
    while ($row = mysqli_fetch_assoc($result)) { // row adalah baju yang diambil setiap looping-nya
        $rows[] = $row; // ambil baju simpan didalam wadah 
    }
    return $rows; // mengembalikan wadahnya
}

function tambah_user($data)
{
    global $koneksi;

    $id = uniqid();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $level =  htmlspecialchars($data['level']);

    $query = "INSERT INTO user VALUES 
                    (md5('$id'),
                    '$username',
                    '$email',
                    md5('$password'),
                    '$no_hp',
                    '',
                    '$level'
                    ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapus_user($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");

    return mysqli_affected_rows($koneksi);
}

function ubah_user($data)
{
    global $koneksi;

    $id = $data['id_user'];
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $level =  htmlspecialchars($data['level']);

    $query = "UPDATE user SET
                username='$username',
                email='$email',
                password=md5('$password'),
                no_hp='$no_hp',
                level='$level'
                WHERE id_user='$id'
                ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function tambah_postingan($data)
{
    global $koneksi;

    $id = uniqid();

    $judul = htmlspecialchars($data['judul']);
    $konten = htmlspecialchars($data['konten']);
    $tgl_rilis = htmlspecialchars($data['tgl_rilis']);

    // upload gambar
    $foto = upload();
    if (!$foto) {
        return false;
    }

    $query_input = "INSERT INTO postingan( id_postingan, judul, konten, tgl_rilis, foto)
                        VALUES
                        (md5('$id'),'$judul','$konten','$tgl_rilis','$foto')
                        ";

    // $query = "INSERT INTO postingan VALUES 
    //                 (md5('$id'),
    //                 '$judul',
    //                 '$konten',
    //                 '$tgl_rilis',
    //                 '$foto',
    //                 '',
    //                 ";

    mysqli_query($koneksi, $query_input);

    return mysqli_affected_rows($koneksi);
}

function upload()
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo '<script>alert ("pilih gambar terlebih dahulu")
        </script>';
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile); // explode adalah fungsi untuk memecah sebuah string menjadi array
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo '<script>alert ("yang anda upload bukan gambar")
            </script>';
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 2000000) {
        echo '<script>alert ("ukuran gambar terlalu besar")
            </script>';
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../gambar/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus_postingan($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM postingan WHERE id_postingan='$id'");

    return mysqli_affected_rows($koneksi);
}

function ubah_postingan($data)
{
    global $koneksi;

    $id = $data['id_postingan'];

    $judul = htmlspecialchars($data['judul']);
    $konten = htmlspecialchars($data['konten']);
    $tgl_rilis = htmlspecialchars($data['tgl_rilis']);
    $fotoLama = htmlspecialchars($data['fotoLama']);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }


    $query = "UPDATE postingan SET
                judul='$judul',
                konten='$konten',
                tgl_rilis='$tgl_rilis',
                foto='$foto'
                WHERE id_postingan='$id'
                ";


    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
