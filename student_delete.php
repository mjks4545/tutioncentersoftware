<?php
include'include/conn.php';
$get_id = $_GET['id']; 
$sql = ("DELETE FROM `student` WHERE `student_id` = $get_id");
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
