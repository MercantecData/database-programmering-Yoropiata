<?php

$dbhost     = "127.0.0.1";
$dbuser     = "root";
$dbpassword = "";
$database = "login";

$conn=mysqli_connect($dbhost, $dbuser, $dbpassword, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>