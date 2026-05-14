<!DOCTYPE html>
<html>
<head>
    <title>Lihat Catatan</title>
</head>
<body>
    <h2>Catatan Siswa</h2>
    <pre>
<?php
    if (file_exists("catatan.txt")) {
        echo htmlspecialchars(file_get_contents("catatan.txt"));
    } else {
        echo "Belum ada catatan.";
    }
?>
    </pre>
    <a href="index2.php">🔙 Kembali ke Beranda</a>
</body>
</html>
