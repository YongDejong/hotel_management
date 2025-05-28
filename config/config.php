<?php

define ("HOST", "localhost");
define ("DBNAME", "hotel_management");
define ("USER", "root");
define ("PASSWORD", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} else {
     //echo "Connected successfully";
}
?>
