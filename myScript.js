function openSideNav() {
    if (document.getElementById("mySidenav").style.width === "210px") {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("navbar").style.borderBottomRightRadius = "25px";
    } else {
    document.getElementById("mySidenav").style.width = "210px";
    document.getElementById("navbar").style.borderBottomRightRadius = 0;
    }
}
/*
function toggleMode() {
    var darkMode = document.body;
    darkMode.classList.toggle("dark-mode");
}*/
function toggleMode() {
    const containerBody = document.body;
    let theme = localStorage.getItem("data-theme");

if (theme === "light"){ 
    containerBody.setAttribute("data-theme", "dark");
    localStorage.setItem("data-theme", "dark");
    } else {
    containerBody.setAttribute("data-theme","light");
    localStorage.setItem("data-theme", "light");
    }
}

function loadTheme(){
    let containerBody = document.body;
    let dataTheme = containerBody.getAttribute("data-theme");
    let theme = localStorage.getItem("data-theme");

if (theme === "light"){ 
    containerBody.setAttribute("data-theme", "light");
    } else {
    containerBody.setAttribute("data-theme","dark");
    }
}