<?php
include 'include/conn.php';
//include 'include/header.php';
?>
<?php
//include 'include/leftsidebar.php';
?>

<?php

$sql = ("SELECT * FROM `accounts` WHERE date_added like '%3%'");
$stmt = $conn->prepare($sql);
$stmt -> execute();
$result = $stmt->fetchAll();
//echo '<pre>';
//print_r($result);
//echo '</pre>';
?>
<?php
//include'include/footer.php';

?>