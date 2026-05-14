<?php
include "koneksi.php";

$query = "SELECT * FROM users";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " - Nama: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
    }
} else {
    echo "Tidak ada data";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
