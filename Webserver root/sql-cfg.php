<?php

$dbhost     = "localhost";
$dbuser     = "Qbowle";
$dbpassword = "lOXEQObIX623nA5aQuBa8uL1Wani57";
$database = "qbowle";

$conn=mysqli_connect($dbhost, $dbuser, $dbpassword, $database);

if ($conn->connect_error) {
    echo "error in database";
    die("Connection failed: " . $conn->connect_error);
}
?>