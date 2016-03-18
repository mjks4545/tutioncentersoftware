
 
 <?php
include'include/conn.php';
$get_id = $_GET['id']; 
$sql = ("DELETE FROM `course` WHERE `course_id` = $get_id");
$stmt = $conn->prepare($sql);
$stmt->execute();
//header(location:course.php);
?>
