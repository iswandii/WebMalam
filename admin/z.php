<?php
include 'proses/functions.php';
// ambil data di URL 
$id = $_GET['id'];

// query data user berdasarkan id
$user = query("SELECT * FROM user WHERE id_user='$id'");
var_dump($user);
