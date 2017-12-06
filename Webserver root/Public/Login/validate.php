<?php 
if(!( isset($_GET["action"]) && 
    isset($_POST["username"]) &&
    isset($_POST["password"]) )) {
          die();
}
$action = $_GET["action"];
if($action === "Login") {

} else if ($action === "Register") {

}
?>