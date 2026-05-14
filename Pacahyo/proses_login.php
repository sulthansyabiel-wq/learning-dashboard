<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username == "" || $_POST['password'] == "") {
    echo "<script>
        alert('Username dan Password tidak boleh kosong!');
        window.location='login.php';
    </script>";
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['username'] = $data['username'];
    echo "<script>
        alert('Login berhasil! Selamat datang $username');
        window.location='dashboard.php';
    </script>";
} else {
    echo "<script>
        alert('Login gagal! Username atau password salah');
        window.location='login.php';
    </script>";
}
?>