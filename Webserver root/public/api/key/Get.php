<?php
if(isset($_GET["userID"])) {
    $userID = $_GET["userID"];
    if($userID == "") {
        die();
    }
    try {
        include "../../../sql-cfg.php";
        $sql = "SELECT API_KEY FROM users WHERE id = $userID";
        $query = $conn->query($sql);
        $results = mysqli_fetch_array($query);
        if($results["API_KEY"] == "") {
            echo "You don't have an API Key...";
            die();
        }
        echo $results["API_KEY"];
        die();
    } catch (Exception $i){
        echo "No API key available.";
        die();
    }
} else {
    die();
}
?>