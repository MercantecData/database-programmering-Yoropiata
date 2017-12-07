<?php
function doRegister($username, $password) { // entry point.
    $salt = generateSalt();
    $hash = hashPassword($salt, $password);
    if(insert_query($username, $salt, $hash)) {
        return true;
    } else {
        return false;
    }
}

function generateSalt($length = 64) {
    $salt = openssl_random_pseudo_bytes($length);
    $salt = base64_encode($salt);
    return $salt; 
}

function hashPassword($salt, $password, $keyLength = 64, $iterations = 10000) {
    $keyLength = 64;
    $iterations = 10000;
    $hash = openssl_pbkdf2($password, $salt, $keyLength, $iterations, 'sha256');
    $hash = base64_encode($hash);
    return $hash;
}

function insert_query($username, $salt, $hash) {
    include "sql-cfg.php";
    $sql = "INSERT INTO users(username, salt, hash) VALUES ('" . mysqli_real_escape_string($conn, $username) . "', '" . $salt . "', '". $hash . "')";
    $result = mysqli_multi_query($conn, $sql);
    if($result) { //Successfully inserted!
        return true;
    } else { //Failed to insert!
        return false;
    }
}
?>