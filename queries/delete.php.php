<?php
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$sql = "DELETE FROM teacher WHERE id=4";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} 
else {
    
	//echo "Error deleting record: " . $conn->error;
}

//$conn->close();
?>
<?include 'include/footer.php';?>


