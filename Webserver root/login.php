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

function getUserData($username) {
    include "sql-cfg.php";    
    $sql = "SELECT id, username, salt, hash FROM users WHERE username='" . $username . "';";
    $userQuery = $conn->query($sql);
    echo $userQuery["id"][0];
}

function hashPassword($salt, $password, $keyLength = 64, $iterations = 10000) {
    $keyLength = 64;
    $iterations = 10000;
    $hash = openssl_pbkdf2($password, $salt, $keyLength, $iterations, 'sha256');
    $hash = base64_encode($hash);
    return $hash;
}

function checkIfUserExists() {

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

if(isset($_POST["alias"])) {
    
    while($row = mysqli_fetch_assoc($userQuery)) {
        echo 'user: ' . $row["alias"] . ' - Pass:' . $row["password"] . '<br>';
    }
}
?>