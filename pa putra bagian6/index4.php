<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Kelas & Siswa</title>
</head>
<body>
    <h1>Daftar Kelas</h1>
    <a href="add_class.php">+ Tambah Kelas</a> | 
    <a href="add_student.php">+ Tambah Siswa</a>
    <br><br>

    <?php
    $classes = $conn->query("SELECT * FROM classes");
    while($c = $classes->fetch_assoc()) {
        echo "<h3>Kelas: {$c['class_name']} | Guru: {$c['teacher']} | Jadwal: {$c['schedule']}</h3>";
        
        $students = $conn->query("SELECT * FROM students WHERE class_id=".$c['id']);
        if($students->num_rows > 0){
            echo "<ul>";
            while($s = $students->fetch_assoc()){
                echo "<li>{$s['student_name']} ({$s['contact']}) 
                    <a href='edit_student.php?id={$s['id']}'>Edit</a> | 
                    <a href='delete.php?student_id={$s['id']}'>Hapus</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<i>Tidak ada siswa terdaftar</i>";
        }

        echo "<br><a href='delete.php?class_id={$c['id']}'>Hapus Kelas Ini</a><hr>";
    }
    ?>
</body>
</html>
