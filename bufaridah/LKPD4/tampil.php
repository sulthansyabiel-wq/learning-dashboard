<?php
include "koneksi.php";

$data = mysqli_query($koneksi,"SELECT * FROM profil_siswa");
while($row = mysqli_fetch_assoc($data)){
    echo $row['id']." - ".$row['nama']." - ".$row['kelas']." ";
    echo "<a href='edit.php?id=".$row['id']."'>Edit</a> | ";
    echo "<a href='hapus.php?id=".$row['id']."'>Hapus</a><br>";
}
?>