<?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM laundry");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Laundry</title>
</head>
<body>

<h2>Data Laundry</h2>
<a href="tambah.php">+ Tambah Data</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Laundry</th>
        <th>Berat (kg)</th>
        <th>Harga/Kg</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>

<?php $no = 1; ?>
<?php while($row = mysqli_fetch_assoc($result)) : ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_pelanggan']; ?></td>
    <td><?= $row['jenis_laundry']; ?></td>
    <td><?= $row['berat']; ?></td>
    <td><?= $row['harga']; ?></td>
    <td><?= $row['total']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>

</table>
</body>
</html>