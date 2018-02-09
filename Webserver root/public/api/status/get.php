<?php
function setGetters($getparameters = array()) {
    $existingParams = array();
    foreach($getparameters as $param) {
        if(isset($_GET[$param])) {
            $existingParams[] = $param;
        }
    }
    return $existingParams;
}

function CheckGet($param) {
    if(isset($_GET[$param])) {
        return $_GET[$param];
    }
    return null;
}
    include "../../../API-log.php";
    include "../../../sql-cfg.php";

    $getters = array("api_key", "username", "uid", "id");
    $getters = setGetters($getters);
    if (!in_array("api_key", $getters)) {
        echo "No API_KEY supplied.";
        print_r($getters);
        die();
    }
    


    /*
    $filter = array();

    if(isset($_GET["username"])) {
        $filter[] = $_GET["username"];
    }
    if(isset($_GET["uid"])) {
        $filter[] = $_GET["uid"];
    }
    print_r($filter);

    function CheckGet($param) {
        if(isset($_GET["uid"])) {
            $filter[] = $_GET["uid"];
        }
    }
    */
?>