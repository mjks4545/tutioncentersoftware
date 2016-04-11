<?php
ob_start();
include'include/conn.php';
$get_id = $_GET['id'];
$sql = ("DELETE FROM `teacher1` WHERE `s.no` = $get_id");
$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location:teacher.php");
  ?>
