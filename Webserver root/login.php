<?php
function doLogin($username, $password) { // entry point.
    if($userdata = getUserData($username)) {
        if($userdata["hash"] == hashPassword($userdata["salt"], $password)) {
            //Success
            return true;
        } else {
            //incorrect password.
            return false;
        }
        
    } else {
        //UserDoesn'tExist
        return false;
    }
}

function getUserData($username) {
    include "sql-cfg.php";    
    $sql = "SELECT id, username, salt, hash FROM users WHERE username='" . $username . "';";
    $userQuery = $conn->query($sql);
    $userData = mysqli_fetch_array($userQuery);
    return $userData;
}

function hashPassword($salt, $password, $keyLength = 64, $iterations = 10000) {
    $keyLength = 64;
    $iterations = 10000;
    $hash = openssl_pbkdf2($password, $salt, $keyLength, $iterations, 'sha256');
    $hash = base64_encode($hash);
    return $hash;
}

function UserExists() {

}

?>