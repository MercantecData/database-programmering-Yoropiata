<?php

$dbhost     = "localhost";
$dbuser     = "kristian-login";
$dbpassword = "w7Gg*kj~;2B}HvGD";
$database = "kristian_login";

$conn=mysqli_connect($dbhost, $dbuser, $dbpassword, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>