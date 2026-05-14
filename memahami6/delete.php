<?php
$koneksi = mysqli_connect("localhost", "root", "", "webapp");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id=$id";
    mysqli_query($koneksi, $query);
}

header("Location: index5.php");
exit;
?>
