var APIKeyText;
var Requestbtn;
$(document).ready(function() {
    APIKeyText = $("#APIKey")
    RequestAPIKeybtn = $("#requestAPIkey");
    var uid = RequestAPIKeybtn.data("uid");
    RequestAPIkey(uid);
    RequestAPIKeybtn.click(function() {
        CreateNewAPIKey(uid);
    });
    
    
});

function RequestAPIkey(id) {
    $.ajax({
        type: 'GET',
        url: "api/Key/Get.php?userID="+id,
        success: function(key) {
            APIKeyText.text(key)
        }
    })
}
function CreateNewAPIKey(id) {
    $.ajax({
        type: 'GET',
        url: "api/Key/Generate.php?userID="+id,
        success: function() {
            RequestAPIkey(id);
        }
    })
}