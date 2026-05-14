<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Kelas</title></head>
<body>
    <h2>Tambah Kelas Baru</h2>
    <form method="post">
        Nama Kelas: <input type="text" name="class_name" required><br><br>
        Jadwal: <input type="text" name="schedule" required><br><br>
        Guru: <input type="text" name="teacher" required><br><br>
        <input type="submit" name="save" value="Simpan">
    </form>
    <br><a href="index4.php">Kembali</a>

<?php
if(isset($_POST['save'])){
    $class_name = $_POST['class_name'];
    $schedule   = $_POST['schedule'];
    $teacher    = $_POST['teacher'];

    $sql = "INSERT INTO classes (class_name, schedule, teacher) VALUES ('$class_name','$schedule','$teacher')";
    if($conn->query($sql)){
        echo "Kelas berhasil ditambahkan! <a href='index4.php'>Lihat Daftar</a>";
    } else {
        echo "Error: ".$conn->error;
    }
}
?>
</body>
</html>
