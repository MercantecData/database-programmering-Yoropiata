<?php session_start();
include "sql-cfg.php";
if(isset($_POST["alias"])) {
    $sql = "SELECT alias, password FROM users WHERE alias='".$_POST['alias']."' AND password='".$_POST['password']."'";
    $userQuery = $conn->query($sql);
    while($row = mysqli_fetch_assoc($userQuery)) {
        echo 'user: ' . $row["alias"] . ' - Pass:' . $row["password"] . '<br>';
    }
}
?>