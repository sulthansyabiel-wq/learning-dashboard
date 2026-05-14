<?php
$koneksi = mysqli_connect("localhost", "root", "", "webapp");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    mysqli_query($koneksi, $query);

    header("Location: index5.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        Nama: <input type="text" name="name" value="<?= $row['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= $row['email']; ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
