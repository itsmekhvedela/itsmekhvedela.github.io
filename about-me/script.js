function showInfo(){
    if (document.getElementById("additionalInfo").style.display === "flex"){
        document.getElementById("additionalInfo").style.display = "none";
        document.getElementById("showInfoBtn").textContent = "Show more";
    } else {
        document.getElementById("additionalInfo").style.display = "flex";
        document.getElementById("showInfoBtn").textContent = "Hide all";
    }
}