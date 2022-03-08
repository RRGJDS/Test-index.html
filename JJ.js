function zero(){
    var HJlive = true;

    var SKYlive = true;

    var pudding = true;

    var suspect = true;
}
var happy = new Audio("audio/happy ending.mp3");
var normal = new Audio("audio/Normal ending.mp3");
var truth = new Audio("audio/truth.mp3");
var battle = new Audio("audio/battle.mp3");

document.querySelector("#audioP").addEventListener("click", function(){
    happy.play();
    happy.loop = true;
    happy.volume = 0.2;
    happy.currentTime = 0;
});

Cookies.set("Test","12");