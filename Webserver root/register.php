<?php session_start();
include "sql-cfg.php";
function doRegister($username, $password) { // entry point.
    $salt = generateSalt();
    $hash = hashPassword($salt);
    if(insert_query($username, $salt, $hash)) {
        return true;
    } else {
        return false;
    }
}

function generateSalt($length = 64) {
    $salt = openssl_random_pseudo_bytes($length);
    return base64_encode($salt);
}

function hashPassword($salt, $keyLength = 64, $iterations = 10000) {
    $keyLength = 64;
    $iterations = 10000;
    $hash = openssl_pbkdf2($_POST["password"], $salt, $keyLength, $iterations, 'sha256');
    return base64_encode($hash);
}

function checkIfUserExists() {
    
}

function insert_query($username, $salt, $hash) {
    $sql = "INSERT INTO users(username, salt, hash) VALUES ('" . $conn->real_escape_string($username) . "', '" . $salt . "', '". $hash . "')";
    $result = mysqli_multi_query($conn, $sql);
    if($result) { //Successfully inserted!
        return true;
    } else { //Failed to insert!
        return false;
    }
}

/*
if(isset($_POST["alias"])) {
    $alias = $_POST["alias"];
    $salt = openssl_random_pseudo_bytes(64);
    $salt = base64_encode($salt);
    $keyLength = 64;
    $iterations = 10000;
    $hash = openssl_pbkdf2($_POST["password"], $salt, $keyLength, $iterations, 'sha256');
    $hash = base64_encode($hash);
    $sql = "INSERT INTO users(alias, salt, hash) VALUES ('" . $conn->real_escape_string($alias) . "', '" . $salt . "', '". $hash . "')";
    
    if($result = mysqli_multi_query($conn, $sql)) {
        echo "<script type='text/javascript'>location.href = 'index.php';</script>";
    } else {
        var_dump($result);
        echo "Failed to register you! Your alias is likely taken.";
    }
}
  */  
?>