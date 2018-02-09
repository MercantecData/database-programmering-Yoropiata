<?php
if(isset($_GET["userID"])) {
    $userID = $_GET["userID"];
    if($userID == "") {
        die();
    }
    try {
        include "../../../sql-cfg.php";
        $sql = "SELECT key FROM api_key_user WHERE id = $userID AND NOT disabled = 1";
        $query = $conn->query($sql);
        $results = mysqli_fetch_array($query);
        if($results["key"] == "") {
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