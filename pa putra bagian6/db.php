<?php
$host = "localhost";
$user = "root"; // default user MySQL XAMPP
$pass = "";
$db   = "school_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
