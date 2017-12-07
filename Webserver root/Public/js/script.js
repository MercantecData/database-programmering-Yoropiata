$(document).ready(function() {
    var feedBoxes = document.getElementsByClassName("feed");
    feedBoxes.forEach(function(feed) {
        alert(feed.innerHTML);
    });

});
function doLogin() {
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;
    if (user == "Allan" && pass == "Fisk") {
        alert(user + " you have succesfully logged on, congratulations! :)")
    } else {
        alert("You done messed up...")
    }
}