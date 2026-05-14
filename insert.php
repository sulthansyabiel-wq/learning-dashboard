<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mydb";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$name  = $_POST['name'];
$email = $_POST['email'];

// Insert ke tabel
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan! <a href='index3.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
