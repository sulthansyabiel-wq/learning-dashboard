<?php
$host = "localhost"; // server MySQL
$user = "root";      // username MySQL
$password = "";      // password MySQL (kosong default di XAMPP)
$dbname = "webapp";  // nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $dbname);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>
