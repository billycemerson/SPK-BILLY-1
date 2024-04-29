<?php
$host = 'localhost';
$port = 3307;
$username = 'root';
$password = '';
$database = 'db_spk';

$koneksi = mysqli_connect("$host:$port", $username, $password, $database);

if (!$koneksi) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}

mysqli_select_db($koneksi, $database) or die("Gagal memilih database!");

?>