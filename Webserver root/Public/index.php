<?php session_start();
if(!(isset($_SESSION["username"]) && $_SESSION["id"])) {
    echo '<script type="text/javascript">window.location.href="./login";</script>';
}
echo "Welcome to the frontpage " . $_SESSION["username"] . ". <br>";
echo "your ID is: " . $_SESSION["id"] . ".";