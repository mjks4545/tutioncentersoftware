<?php
ob_start();
include'include/conn.php';
$get_id = $_GET['id']; 
$sql = ("DELETE FROM `fee` WHERE `s.no` = $get_id");
$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location:fee.php");
?>
