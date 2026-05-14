<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<h2>Selamat datang di Sistem Akademik</h2>

<ul>
    <li><a href="siswa.php">Kelola Siswa</a></li>
    <li><a href="kelas.php">Kelola Kelas</a></li>
    <li><a href="guru.php">Kelola Guru</a></li>
</ul>

<a href="logout.php">Logout</a>