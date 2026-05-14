<?php
// Proses perhitungan jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    // Validasi input
    if ($harga <= 0 || $jumlah <= 0) {
        $pesan = "❌ Harga dan jumlah barang harus lebih dari 0.";
    } else {
        $total = $harga * $jumlah;

        if ($total > 1000000) {
            $diskon = $total * 0.10;
            $total_setelah_diskon = $total - $diskon;
            $pesan = "✅ Total belanja: Rp " . number_format($total, 0, ',', '.') .
                     "<br>Diskon 10%: Rp " . number_format($diskon, 0, ',', '.') .
                     "<br>Total setelah diskon: Rp " . number_format($total_setelah_diskon, 0, ',', '.');
        } else {
            $pesan = "✅ Total belanja: Rp " . number_format($total, 0, ',', '.');
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Belanja</title>
</head>
<body>
    <h2>Formulir Belanja</h2>
    <form method="post" action="belanja.php">
        Harga Barang (Rp): <input type="number" name="harga" required><br><br>
        Jumlah Barang: <input type="number" name="jumlah" required><br><br>
        <input type="submit" value="Hitung Harga">
    </form>

    

    <br>
    <?php
    if (isset($pesan)) {
        echo "<hr><strong>Hasil:</strong><br>" . $pesan;
    }
    ?>
</body>
</html>
