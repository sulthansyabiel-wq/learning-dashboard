<?php
// Fungsi untuk memeriksa pendaftaran kursus
function periksa_pendaftaran($jumlah_kursus) {
    if ($jumlah_kursus <= 0) {
        return "❌ Jumlah kursus harus lebih dari 0.";
    } elseif ($jumlah_kursus > 3) {
        return "❌ Maksimal kursus yang dapat diambil adalah 3.";
    } else {
        return "✅ Anda berhasil mendaftar ke $jumlah_kursus kursus.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Kursus LMS</title>
</head>
<body>
    <h2>Formulir Pendaftaran Kursus</h2>

    <form method="post" action="pendaftaran.php">
        Jumlah kursus yang ingin diikuti (maksimal 3): 
        <input type="number" name="jumlah_kursus" min="1" max="3" required>
        <br><br>
        <input type="submit" value="Daftar Kursus">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah_kursus = $_POST["jumlah_kursus"];
        echo "<hr><strong>Hasil:</strong><br>";
        echo periksa_pendaftaran($jumlah_kursus);
    }
    ?>
</body>
</html>
