<?php include 'db.php'; 
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Siswa</title></head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="post">
        Nama: <input type="text" name="student_name" value="<?= $student['student_name'] ?>" required><br><br>
        Kontak: <input type="text" name="contact" value="<?= $student['contact'] ?>" required><br><br>
        Kelas:
        <select name="class_id" required>
            <?php
            $classes = $conn->query("SELECT * FROM classes");
            while($c = $classes->fetch_assoc()){
                $selected = ($c['id']==$student['class_id']) ? "selected" : "";
                echo "<option value='{$c['id']}' $selected>{$c['class_name']}</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" name="update" value="Update">
    </form>
    <br><a href="index4.php">Kembali</a>

<?php
if(isset($_POST['update'])){
    $name  = $_POST['student_name'];
    $contact = $_POST['contact'];
    $class_id = $_POST['class_id'];

    $sql = "UPDATE students SET student_name='$name', contact='$contact', class_id='$class_id' WHERE id=$id";
    if($conn->query($sql)){
        echo "Data siswa berhasil diperbarui! <a href='index4.php'>Lihat Daftar</a>";
    } else {
        echo "Error: ".$conn->error;
    }
}
?>
</body>
</html>
