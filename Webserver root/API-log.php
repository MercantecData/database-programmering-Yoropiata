<?php
Class API_Log {
    function API_Log($uid, $apikey, $action) {
        include "sql-cfg.php";
        $sql = "INSERT INTO API_Log (uid, apikey, action) VALUES ((SELECT uid FROM API_keys WHERE key = $apikey), $apikey, $action)";
        $query = $conn->query($sql);
        mysqli_multi_query($conn, $sql);
    }
}

?>