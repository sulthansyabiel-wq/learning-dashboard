<?php
include 'koneksi.php';
include 'function.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM laundry WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {

    $nama  = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];

    if (validasi($berat, $harga)) {

        $total = hitungTotal($berat, $harga);

        mysqli_query($koneksi, "UPDATE laundry SET 
            nama_pelanggan='$nama',
            jenis_laundry='$jenis',
            berat='$berat',
            harga='$harga',
            total='$total'
            WHERE id='$id'
        ");

        header("Location: index.php");
    } else {
        echo "Berat dan harga harus lebih dari 0!";
    }
}
?>

<h2>Edit Data Laundry</h2>
<form method="POST">
    Nama Pelanggan <br>
    <input type="text" name="nama" value="<?= $row['nama_pelanggan']; ?>" required><br><br>

    Jenis Laundry <br>
    <input type="text" name="jenis" value="<?= $row['jenis_laundry']; ?>" required><br><br>

    Berat (kg) <br>
    <input type="number" name="berat" value="<?= $row['berat']; ?>" required><br><br>

    Harga per Kg <br>
    <input type="number" name="harga" value="<?= $row['harga']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>