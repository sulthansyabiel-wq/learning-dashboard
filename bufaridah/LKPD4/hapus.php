<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM profil_siswa WHERE id='$id'");

echo "Data berhasil dihapus";
?>