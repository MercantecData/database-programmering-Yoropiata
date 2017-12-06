<?php session_start();
include "sql-cfg.php";
if(isset($_POST["alias"])) {
    $alias = $_POST["alias"];
    $salt = openssl_random_pseudo_bytes(12);
    $keyLength = 40;
    $iterations = 10000;
    $hash = openssl_pbkdf2($_POST["password"], $salt, $keyLength, $iterations, 'sha256');
    $sql = "INSERT INTO users(alias, salt, hash) VALUES ('" . $alias . "', '" . $salt . "', '". $hash . "')";
    
    if(mysqli_multi_query($conn, $sql)) {
        echo "<script type='text/javascript'>location.href = 'index.php';</script>";
    } else {
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