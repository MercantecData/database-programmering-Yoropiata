<?php session_start();
include "sql-cfg.php";
if(isset($_POST["alias"])) {
    $alias = $_POST["alias"];
    $salt = uniqid('', true);
    $hash = password_hash($_POST["password"] . $salt, 'sha256');
    $sql = "INSERT INTO users(alias, salt, hash) VALUES ('" . $alias . "', '" . $salt . "', '". $hash . "')";
    if(mysqli_multi_query($conn, $sql)) {
        echo "<script type='text/javascript'>location.href = 'index.php';</script>";
    } else {
        echo "Failed to register you! Your alias is likely taken.W";
    }
} else {
    ?>
    <form action="./register.php" method="post">
    Alias:<br>4
    <input type="text" name="alias" value="alias">
    <br>
    Password:<br>
    <input type="password" name="password" value="pass">
    <br><br>
    <input type="submit" value="Submit">
  </form> 
    <?php
}
    
?>