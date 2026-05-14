<?php
include 'koneksi.php';
include 'function.php';

if (isset($_POST['simpan'])) {

    $nama  = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];

    if (validasi($berat, $harga)) {

        $total = hitungTotal($berat, $harga);

        mysqli_query($koneksi, "INSERT INTO laundry 
        VALUES (NULL, '$nama', '$jenis', '$berat', '$harga', '$total')");

        header("Location: index.php");
    } else {
        echo "Berat dan harga harus lebih dari 0!";
    }
}
?>

<h2>Tambah Data Laundry</h2>
<form method="POST">
    Nama Pelanggan <br>
    <input type="text" name="nama" required><br><br>

    Jenis Laundry <br>
    <input type="text" name="jenis" required><br><br>

    Berat (kg) <br>
    <input type="number" name="berat" required><br><br>

    Harga per Kg <br>
    <input type="number" name="harga" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>