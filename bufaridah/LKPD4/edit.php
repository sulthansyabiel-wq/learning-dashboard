<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM profil_siswa WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
Kelas: <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"><br>
<button type="submit">Update</button>
</form>
File: update.php
<?php
include "koneksi.php";

$id    = $_POST['id'];
$nama  = $_POST['nama'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,
"UPDATE profil_siswa SET nama='$nama', kelas='$kelas' WHERE id='$id'");

echo "Data berhasil diupdate";
?>