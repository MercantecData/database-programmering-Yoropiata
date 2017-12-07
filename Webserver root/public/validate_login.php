<?php 
function CheckPostAndURI() {
    if(isset($_GET["action"]) && 
    isset($_POST["username"]) &&
    isset($_POST["password"]) ) {
        return true;
    }
    return false;
}
function Login() {
    if(filter_var($_POST["username"], FILTER_VALIDATE_EMAIL)) {
        //isEmail
    } else {
        //isNotEmail
    }
}
function Register() {

}
function isLogin() {
    
}
function isRegister() {
    if($_GET["action"] == "register") {
        return true;
    } 
}

function 


$action = $_GET["action"];
if($action === "Login") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (isset($_POST["remember"])) {
        $remember = $_POST["remember"];
        if($remember)
    }
    include "../login.php";
    if(ValidLogin()) {
        echo "<script type='text/javascript'>location.href = './';</script>";
    } else {
        echo "<script type='text/javascript'>location.href = './login';</script>";
    }
} else if ($action === "Register") {

}
?>