<nav>
    <div id="logocont">
        <!--<img id="logo" src="" alt="logo">-->
        <a href="index.php" id="title">Arcanae.co</a>
    </div>
    <div id="navcont1">
        <div id="navcont2">
            <?php 
                if ($_SESSION['language'] == 'English') {
                    echo '<a class="navelement ';
                    if ($_SERVER['REQUEST_URI'] == "/arcanae/index.php") {
                        echo 'location';
                    }
                    echo  '" href="index.php">Home</a>';
                }
                if ($_SESSION['language'] == 'Français') {
                    echo '<a class="navelement ';
                    if ($_SERVER['REQUEST_URI'] == "/arcanae/index.php") {
                        echo 'location"';
                    }
                    echo '" href="index.php">Accueil</a>';
                }
            ?>    
            <?php
                if ($_SESSION['language'] == 'English') {
                    echo '<a class="navelement ';
                    if ($_SERVER['REQUEST_URI'] == "/arcanae/works.php") {
                        echo 'location"';
                    }
                    echo '" href="works.php">Works</a>';
                }
                if ($_SESSION['language'] == 'Français') {
                    echo '<a class="navelement ';
                    if ($_SERVER['REQUEST_URI'] == "/arcanae/works.php") {
                        echo 'location"';
                    }
                    echo '" href="works.php">Projets</a>';
                } 
                    echo '<a class="navelement ';
                    if ($_SERVER['REQUEST_URI'] == "/arcanae/about.php") {
                        echo 'location"';
                    }
                    echo '" href="about.php">About</a>';
            ?>   
        </div>
    </div>
    <footer>
        <p id="copyright">© Arcanae</p>
    </footer>
</nav>