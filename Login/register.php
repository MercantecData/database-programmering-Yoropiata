<?php session_start();
include "sql-cfg.php";
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
        echo "Failed to register you! Your alias is likely taken. <br>";
        echo $alias . " - " . $salt . " - " .  $hash; 
    }
} else {
    ?>
    <form action="./register.php" method="post">
    Alias:<br>
    <input type="text" name="alias" value="alias">
    <br>
    Password:<br>
    <input type="password" name="password" value="pass">
    <br><br>
    <input type="submit" value="Register">
  </form> 
    <?php
}
    
?>