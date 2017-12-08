<?php session_start();
if(!(isset($_SESSION["username"]) && isset($_SESSION["id"]))) {
    echo '<script type="text/javascript">window.location.href="./login";</script>';
}