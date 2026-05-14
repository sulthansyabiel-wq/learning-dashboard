<?php
$koneksi = mysqli_connect("localhost", "root", "", "webapp");
$query = "SELECT * FROM users";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>
    <h2>Daftar User</h2>
    <a href="create.php">+ Tambah User</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
