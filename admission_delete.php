<?php
ob_start();
include'include/conn.php';
$get_id = $_GET['id']; 
$sql = "DELETE FROM `student_course_join` WHERE `student_course_join_id` = $get_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location:admission.php");
?>

