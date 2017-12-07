var ctx;
var c;
var x = 0;
var y = 0;
var canvasH = 200;
var canvasW = 200;
var isAlive = true;
var direction = "right";
var tempDirection = "right";

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

$(document).ready(function(){
    $("$snekgame").width = canvasW;
    $("$snekgame").height = canvasH;
    c = document.getElementById("snekgame");
    ctx = c.getContext("2d");

    $(document).keypress(function(event){

        event = event || window.event;
        var charCode = event.charCode || event.KeyCode;
        var character = String.fromCharCode(charCode);

        switch(character) {
            case "w":
                if(direction != "down") {
                    tempDirection = "up";
                }
                break;
            case "s":
                if(direction != "up") {
                    tempDirection = "down";
                }
                break;
            case "a":
                if(direction != "right") {
                    tempDirection = "left";
                }
                break;
            case "d":
                if(direction != "left") {
                    tempDirection = "right";
                }
                break;
        }
    });
    $("#playbtn").click(function() {
        startGame();
    });
});

function clearCanvas() {
    ctx.clearRect(0,0,500,500);
    ctx.beginPath();
}

function Move() {
    direction = tempDirection;
    switch(direction) {
        case "right":
            x = x + 10;
            break;
        case "left":
            x = x - 10;
            break;
        case "up":
            y = y - 10;
            break;
        case "down":
            y = y + 10;
            break;
    }
}

function tickAction() {
    clearCanvas();
    Move();
    ctx.rect(x, y, canvasW, canvasH);
    ctx.stroke();
}

async function startGame() {
    isAlive = false;
    await sleep(250);
    x = 0;
    y = 0;
    isAlive = true;
    tempDirection = "right";
    while(isAlive) {
        await sleep(200);
        tickAction();
    }
}