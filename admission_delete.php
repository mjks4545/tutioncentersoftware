<?php
ob_start();
include'include/conn.php';
$get_id = $_GET['id']; 
$sql = "DELETE FROM `admission` WHERE `admission`.`s.no` = '$get_id'";
$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location:admission.php");
?>

