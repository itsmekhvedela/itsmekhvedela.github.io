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
        <main id="main">
        <header>
            <h1>Khvedela</h1>
        </header>
        <nav>
            <a class="nav-button-active" href="index.php">Home</a>
            <a class="nav-button" href="about-me.php">About Me</a>
            <a class="nav-button" href="#">Contact Me</a>
            <button class="nav-button-open" id="navButtonOpen" onclick="openSideNav()">Ξ</button>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a class="nav-button" href="/upcoming-updates.html" title="Upcoming Updates">
                Upcoming Updates
            </a>
            <a class="nav-button" href="/links/fatex.php" title="FateX discord community">
                FateX Discord
            </a>
            <a class="nav-button" href="/links/discord.php" title="My Discord group">
                My Discord
            </a>
            <a class="nav-button" href="/links/youtube.php" title="My Youtube channel">
                My Youtube
            </a>
            <button class="btn-toggle" onclick="toggleMode()">◐</button>
        </div>
            <article>
            <div class="div-container">
                <div class="div-box">
                    <span class="box-text">This is my first website, which I use to upgrade my Web-Developing skills.</span>
                    <span>Time is: <?php echo date("H:i:s"); ?>  🕰️</span>
                </div>
            </div>
            </article>
            <footer>
                <p>&copy;Nicholas Khvedelidze. All rights reserved</p>
            </footer>
        </main>
    </body>
</html>