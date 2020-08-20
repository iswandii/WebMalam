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


function query ($query){
    global $koneksi;
    $result=mysqli_query($koneksi, $query); // result adalah lemarinya
    $rows=[]; // wadah kosong
    while ($row =mysqli_fetch_assoc($result)) { // row adalah baju yang diambil setiap looping-nya
        $rows[]=$row; // ambil baju simpan didalam wadah 
    }
    return $rows; // mengembalikan wadahnya
}
