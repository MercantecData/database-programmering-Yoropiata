<?php session_start();
if(!(isset($_SESSION["username"]) && $_SESSION["id"])) {
    echo '<script type="text/javascript">window.location.href="./login";</script>';
}
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
            <div id="post_Status_Update">
                
            </div>
            <div id="content">
                <div class="feed">
                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan enim ut dui posuere, sed convallis tellus semper. Mauris sit amet neque sem. Ut a nisl nec augue efficitur faucibus. Vestibulum a mi in justo egestas dictum. Sed sit amet cursus est, molestie tempor elit. Phasellus sed lectus at justo vehicula dictum vitae sit amet nunc. Praesent cursus semper condimentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent auctor sem suscipit metus tempor, in porttitor ligula sodales. Proin vel est sit amet metus gravida suscipit quis at nibh. Suspendisse dictum elit a elit placerat, quis convallis metus malesuada. Nam laoreet ante vitae massa sodales, vel imperdiet mauris ornare. Maecenas gravida dolor non lorem vestibulum, a semper massa sodales.</a>                    
                </div>
                <div class="feed">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan enim ut dui posuere, sed convallis tellus semper. Mauris sit amet neque sem. Ut a nisl nec augue efficitur faucibus. Vestibulum a mi in justo egestas dictum. Sed sit amet cursus est, molestie tempor elit. Phasellus sed lectus at justo vehicula dictum vitae sit amet nunc. Praesent cursus semper condimentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent auctor sem suscipit metus tempor, in porttitor ligula sodales. Proin vel est sit amet metus gravida suscipit quis at nibh. Suspendisse dictum elit a elit placerat, quis convallis metus malesuada. Nam laoreet ante vitae massa sodales, vel imperdiet mauris ornare. Maecenas gravida dolor non lorem vestibulum, a semper massa sodales.
                            Donec congue leo massa, bibendum pharetra est pulvinar eget. Curabitur at suscipit felis, non consequat urna. Suspendisse vel odio hendrerit, consequat purus ut, aliquam mauris. Proin porttitor rhoncus lacus ut aliquet. In ultrices lacus et nisi rutrum efficitur. Curabitur turpis nisi, ultricies nec pharetra et, pellentesque consectetur orci. In mattis sit amet lectus a porta. Nulla et tortor mi. Quisque fringilla erat quis dui ornare, in pellentesque nisl efficitur. Quisque dignissim turpis non vulputate pretium. Curabitur ac ultricies sapien, eget aliquet metus. Suspendisse cursus sagittis enim, ut auctor sapien tempus sit amet. Nulla facilisi. Vestibulum ultrices tortor massa, ac pretium mi semper at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Proin at scelerisque nulla. Aenean hendrerit est a lacus viverra tristique. Vivamus odio ante, pretium vitae eros eget, sodales sagittis tortor. Ut vestibulum purus vehicula, molestie lacus sed, efficitur nibh. Curabitur at ullamcorper ipsum. Donec pharetra magna magna, eu molestie mi scelerisque et. Sed laoreet imperdiet dictum. Nam auctor sed turpis nec cursus. Nulla non dui pulvinar metus faucibus dignissim eget facilisis massa. Vestibulum laoreet pretium nulla, eget rutrum sapien auctor quis. Curabitur a nisi sed odio congue consectetur. Fusce pulvinar ipsum non elit porttitor viverra. Fusce tristique et metus ac suscipit. Pellentesque rutrum tortor sed orci volutpat, ut vulputate nulla eleifend. Duis vehicula nunc ante.
                            Quisque a ante luctus lectus mollis suscipit. Nam vel tortor augue. Ut malesuada malesuada dolor, ac laoreet urna pulvinar vel. Vivamus sed finibus dui. Proin sed lectus eu mauris blandit lacinia et a erat. Phasellus eu elit varius, finibus dui sed, tempor augue. Nullam purus sapien, mollis at elit at, viverra commodo turpis. Etiam ornare sit amet tellus in pharetra. Duis vulputate massa velit, sit amet vestibulum risus elementum at. Quisque et ullamcorper augue. Fusce sapien mauris, laoreet non diam eget, consectetur volutpat tellus. Suspendisse blandit turpis et augue tincidunt tempor. Mauris et elementum lorem, imperdiet faucibus quam. Quisque odio purus, malesuada ut massa non, varius luctus tortor. Quisque maximus euismod tellus eget ornare.
                            Morbi et mauris eu turpis vehicula lobortis condimentum a urna. Duis quis finibus diam. Sed et pretium velit, nec blandit enim. Vivamus dictum mi ut lacinia volutpat. Proin eu fringilla sapien. Nam tincidunt dapibus velit, in pharetra nisi tempus at. Cras pharetra massa aliquam, tristique augue nec, elementum ante. Proin eu libero vel sem scelerisque imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut convallis mauris turpis, ac vulputate eros elementum et. Pellentesque egestas sed quam tincidunt posuere. Etiam egestas vehicula nulla, nec interdum dolor dapibus id. Nulla sagittis maximus velit a iaculis. Nunc ex justo, luctus vitae varius ac, blandit a diam. Proin ligula risus, finibus quis feugiat eget, dapibus eu libero. Phasellus viverra eros non felis bibendum, rutrum bibendum dolor mollis.
                    </p>
                </div>
                <div class="feed">
                    <a>Content</a>
                    <a>Fiskepind</a>
                </div>
                <div class="feed">
                    <a>Content</a>
                    <a>Fiskepind</a>
                </div>
            </div>
        </div>
    </body>
</html>