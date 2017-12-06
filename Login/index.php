<?php session_start();
include "sql-cfg.php";
if(isset($_POST["alias"])) {
    $sql = "SELECT alias, password FROM users WHERE alias='".$_POST['alias']."' AND password='".$_POST['password']."'";
    $userQuery = $conn->query($sql);
    while($row = mysqli_fetch_assoc($userQuery)) {
        echo 'user: ' . $row["alias"] . ' - Pass:' . $row["password"] . '<br>';
    }
} else {
    session_destroy();
    ?>
    <form action="./" method="post">
    Alias:<br>
    <input type="text" name="alias" value="alias">
    <br>
    Password:<br>
    <input type="password" name="password" value="pass">
    <br><br>
    <input type="submit" value="Login">  <input type="button" value="Register" onclick="location.href='register.php'">
    </form> 
    <?php
}
?>