<?php
$koneksi = mysqli_connect("localhost", "root", "", "webapp");

// Jika tombol submit ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    mysqli_query($koneksi, $query);

    header("Location: index5.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Tambah User</h2>
    <form method="POST" action="">
        Nama: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
