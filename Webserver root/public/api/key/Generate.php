<?php 
if(isset($_GET["userID"])) {
    $userID = $_GET["userID"];
    if($userID == "") {
        die();
    }
    $apikey = implode('-', str_split(substr(strtolower(md5(microtime().rand(1000, 9999))), 0, 30), 6));

    include "../../../sql-cfg.php";
    $sql = "UPDATE users SET API_KEY = '$apikey' WHERE id = $userID";
    $query = $conn->query($sql);            

    } else {
        die();
    }
?>