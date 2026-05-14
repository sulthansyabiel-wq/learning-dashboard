<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catatan = $_POST['catatan'];
    file_put_contents("catatan.txt", $catatan . PHP_EOL, FILE_APPEND);
    echo "✅ Catatan berhasil disimpan.<br><a href='index2.php'>Kembali ke Beranda</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simpan Catatan</title>
</head>
<body>
    <h2>Tulis Catatan Anda</h2>
    <form method="post" action="">
        <textarea name="catatan" rows="6" cols="50" required></textarea><br><br>
        <input type="submit" value="Simpan">
    </form>
    <br>
    <a href="index2.php">🔙 Kembali ke Beranda</a>
</body>
</html>
