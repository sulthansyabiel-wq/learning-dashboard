<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Siswa</title></head>
<body>
    <h2>Tambah Siswa Baru</h2>
    <form method="post">
        Nama Siswa: <input type="text" name="student_name" required><br><br>
        Kontak: <input type="text" name="contact" required><br><br>
        Kelas: 
        <select name="class_id" required>
            <option value="">-- Pilih Kelas --</option>
            <?php
            $classes = $conn->query("SELECT * FROM classes");
            while($c = $classes->fetch_assoc()){
                echo "<option value='{$c['id']}'>{$c['class_name']}</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" name="save" value="Simpan">
    </form>
    <br><a href="index4.php">Kembali</a>

<?php
if(isset($_POST['save'])){
    $student_name = $_POST['student_name'];
    $contact      = $_POST['contact'];
    $class_id     = $_POST['class_id'];

    $sql = "INSERT INTO students (student_name, contact, class_id) VALUES ('$student_name','$contact','$class_id')";
    if($conn->query($sql)){
        echo "Siswa berhasil ditambahkan! <a href='index4.php'>Lihat Daftar</a>";
    } else {
        echo "Error: ".$conn->error;
    }
}
?>
</body>
</html>
