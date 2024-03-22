<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="Khvedela, Khvedelasenpai, Nicholas Khvedelidze">
        <meta name="description" content="Khvedela's main website">
        <meta name="author" content="Nicholas Khvedelidze">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesv2-0.css">
        <title>khvedela</title>
        <link rel="icon" href="/icons/logo.png">
        <script src="/myScript.js"></script>
    </head>
    <body id="body" onload="loadTheme()">
        <header>
            <br><br>
            <template></template>
        </header>
        <nav id="navbar">
            <a class="nav-button" href="index.html">Home</a>
            <a class="nav-button-active" href="about-me.html">About Me</a>
            <a class="nav-button" href="#">Contact Me</a>
            <button class="nav-button-open" id="navButtonOpen" onclick="openSideNav()">Ξ</button>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a class="nav-button" href="/upcoming-updates.html" title="Upcoming Updates">
                Upcoming Updates
            </a>
            <a class="nav-button" href="/links/fatex.html" title="FateX discord community">
                FateX Discord
            </a>
            <a class="nav-button" href="/links/discord.html" title="My Discord group">
                My Discord
            </a>
            <a class="nav-button" href="/links/youtube.html" title="My Youtube channel">
                My Youtube
            </a>
            <button class="btn-toggle" onclick="toggleMode()" title="Toggle light/dark mode">◐</button>
        </div>
        <main id="main">
            <h1>About Me!</h1>
            <div class="div-container">
                <div class="div-box">
                    <span class="box-text">My name is Nicholas Khvedelidze and I am 15 years old. 
                        I am currently learning to code with HTML, CSS and JavaScript.
                    </span>
                </div>
            </div>
        </main>
        <footer>
            <p>&copy;Nicholas Khvedelidze. All rights reserved</p>
        </footer>
    </body>
</html>