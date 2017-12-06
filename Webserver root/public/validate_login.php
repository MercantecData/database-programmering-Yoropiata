<?php 
if(!( isset($_GET["action"]) && 
    isset($_POST["username"]) &&
    isset($_POST["password"]) )) {
        echo "<script type='text/javascript'>location.href = './login';</script>";        
}
$action = $_GET["action"];
if($action === "Login") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    include "../login.php";
    if(ValidLogin()) {
        echo "<script type='text/javascript'>location.href = './';</script>";
    } else {
        echo "<script type='text/javascript'>location.href = './login';</script>";
    }
} else if ($action === "Register") {

}
?>