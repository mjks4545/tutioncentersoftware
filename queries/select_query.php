<?php
$sql="SELECT * FROM `course`";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);

?>