<nav>
    <div id="logocont">
        <!--<img id="logo" src="" alt="logo">-->
        <p class="title" id="title">Arcanae.co</p>
    </div>
    <div id="navcont1">
        <div id="navcont2">
            <?php 
                if ($_SESSION['language'] == 'English') {
                    echo '<a class="navelement" href="index.php">Home</a>';
                }
                if ($_SESSION['language'] == 'Français') {
                    echo '<a class="navelement" href="index.php">Accueil</a>';
                }
            ?>    
            <a class="navelement" href="about.php">About</a>
            <?php
                if ($_SESSION['language'] == 'English') {
                    echo '<a class="navelement" href="works.php">Works</a>';
                }
                if ($_SESSION['language'] == 'Français') {
                    echo '<a class="navelement" href="works.php">Projets</a>';
                } 
            ?>   
            <a target="_blank" class="navelement" href="http://simplonlyon.fr/">Simplon#3</a>
        </div>
    </div>
    <footer>
        <p id="copyright">© Arcanae</p>
    </footer>
</nav>