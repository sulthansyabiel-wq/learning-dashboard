<?php
include 'db.php';

if(isset($_GET['student_id'])){
    $id = $_GET['student_id'];
    $conn->query("DELETE FROM students WHERE id=$id");
    header("Location: index4.php");
}
elseif(isset($_GET['class_id'])){
    $id = $_GET['class_id'];
    $conn->query("DELETE FROM classes WHERE id=$id");
    header("Location: index4.php");
}
?>
