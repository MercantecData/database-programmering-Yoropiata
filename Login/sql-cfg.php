<?php

$dbhost     = "localhost";
$dbuser     = "kristian-login";
$dbpassword = "@-vhxV6ws=mBrGKq";
$database = "kristian_login";

$conn=mysqli_connect($dbhost, $dbuser, $dbpassword, $database);

if ($conn->connect_error) {
    echo "error in database";
    die("Connection failed: " . $conn->connect_error);
}
?>