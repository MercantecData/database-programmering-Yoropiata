<?php 
//Remember to start session before calling this php file.
if(isset($_SESSION["username"]) && isset($_SESSION["id"])) {
    //Possibly validate.
} else if (isset($_COOKIE["RememberMe"])) {
    //Do validate.
} else {
    header("Location: Login");
}
?>