const navButtonOpen = document.getElementById("navButtonOpen");

function openSideNav() {
    if (document.getElementById("mySidenav").style.width === "210px") {
    document.getElementById("mySidenav").style.width = "0";
    } else {
    document.getElementById("mySidenav").style.width = "210px";
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

if (theme === "dark"){ 
    containerBody.setAttribute("data-theme", "dark");
    } else {
    containerBody.setAttribute("data-theme","light");
    }
}