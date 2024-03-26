
function rickroll() {
const rickroll = document.getElementById("rickroll");
const rickrollBtn = document.getElementById("rickrollBtn");
const gameBorder = document.getElementById("gameBorder");

    if (rickroll.style.display === "inline-block"){
    rickroll.style.display = "none";
    rickrollBtn.textContent = "Start Game";
    gameBorder.style.display = "inline-block";
    gameBorder.textContent = "Hehe you got rickrolled!"
    } else {
    rickroll.style.display = "inline-block";
    rickrollBtn.textContent = "hide";
    gameBorder.style.display = "none";
    }
}
