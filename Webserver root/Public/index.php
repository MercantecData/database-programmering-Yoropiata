<?php session_start();
if(!(isset($_SESSION["username"]) && $_SESSION["id"])) {
    echo '<script type="text/javascript">window.location.href="./login";</script>';
}
include "../sql-cfg.php";
if(isset($_POST["status_posttext"])) {
    $sql = "INSERT INTO status(text, user_id) VALUES ('" . mysqli_real_escape_string($conn, $_POST["status_posttext"]) . "', '" . $_SESSION["id"] . "')";
    $result = mysqli_multi_query($conn, $sql);
}
$sql = "SELECT status.text, users.username FROM status INNER JOIN users ON status.user_id = users.id ORDER BY status.modified DESC;";
$statusQuery = $conn->query($sql);

?>

<html>
    <head>
        <title>Qbowle</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <div class="box" id="title">
                <h1>Welcome to Qbowle, <?= $_SESSION["username"]; ?></h1>
            </div>
            <div class="box" id="navbar">
                <input type="button" onclick='window.location.href="./login?action=logout"' value="logout"> <br>
                <a href="users.php">Users</a> <br>
                <a href="friends.php">Friends</a> <br>
            </div>
            <div id="status_post">
                <form action="./" id="status_postform" method="post">
                    <textarea rows="4" cols="50" name="status_posttext"></textarea> <br>
                    <input type="submit">
                </form>          
            </div>
            <div id="content">
                <?php while($row = mysqli_fetch_array($statusQuery)) { ?>
                <div class="status">
                    <h4> <?= $row["username"]; ?> </h4>
                    <a> <?= $row["text"]; ?></a>                    
                </div>

                <?php } ?>
            </div>
        </div>
    </body>
</html>