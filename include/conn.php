<?php
$servername = "tutioncenter-spokeneng.rhcloud.com";
$username = "adminZrLtBtr";
$password = "PNU56Byd16_Y";

try {
  //database connection
     $conn = new PDO("mysql://OPENSHIFT_MYSQL_DB_USERNAME:OPENSHIFT_MYSQL_DB_PASSWORD@OPENSHIFT_MYSQL_DB_HOST:OPENSHIFT_MYSQL_DB_PORT");
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
catch(PDOException $conn)
    {
    echo "Connection failed: " . $conn->getMessage();
    }

?>