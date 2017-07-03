<?php
    $page = "Index";
    session_start();
    if (!isset($_SESSION['language'])){
        $_SESSION['language'] = 'English';
    }
    if (isset($_POST['language'])) {
        $language = $_POST['language'];
        $_SESSION['language'] = $language;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arcanae</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include("nav.php"); ?>
    <main>
    <?php include("header.php"); ?>
    <?php if($_SESSION['language'] == 'English') {?>
        <div id="space">
        <?php if ($_SESSION['language'] == 'English') {?>
            <form action="" method="POST">
            <input type="hidden" name="language" value="Français">
            <input class="langbut" id='enbut' type="submit" value="">
            </form>
        <?php } ?>
        </div>
        <section class="mainsec" id="indexcont">
            <h1 id="welcome">Welcome to <span class="title">Arcanae</span>'s page.</h1>
            <p>Hey! I'm Justin, student at <a href="http://lyon.simplon.co/" id="simplon">Si<span id="simp">mpl</span>on<span id="lon">.co</span></a>.</p>
            <p>Use the "<span class="indexnavnamed">About</span>" section at the left, if you want to know more about me.</p>
            <p>You can see my main projects in the "<span class="indexnavnamed">Works</span>" section.</p>
            <p class="lastindexp">And then you can return/see the pages of my comrades with the "<span class="indexnavnamed">Simplon#3</span>" link.</p>
            <p class="lastindexp">Take your time visiting my website, my works are pretty cool !</p>
            <p class="quote" id="indexquote">"Your <span class="quote" id="travel">travel</span> begin when YOU decide to make the <span class="quote" id="quotefirst">first step</span>"</p>
        </section>
    </main>
    <?php } ?>
    <?php if($_SESSION['language'] == 'Français') { ?>
    <div id="space">
            <?php if ($_SESSION['language'] == 'Français') {?>
                <form action="" method="POST">
                <input type="hidden" name="language" value="English">
                <input class="langbut" id='frbut' type="submit" value="">
                </form>
        <?php } ?>
        </div>
        <section class="mainsec" id="indexcont">
            <h1 id="welcome">Bienvenue sur le site d'<span class="title">Arcanae.</span></h1>
            <p>Hey! Je m'appelle Justin, étudiant à <a href="http://lyon.simplon.co/" id="simplon">Si<span id="simp">mpl</span>on<span id="lon">.co</span></a>.</p>
            <p>Utilisez la section "<span class="indexnavnamed">About</span>" dans le menu à gauche, pour en savoir plus à mon propos.</p>
            <p>Vous pouvez voir mes projets principaux avec le bouton "<span class="indexnavnamed">Projets</span>".</p>
            <p class="lastindexp">Et avec le lien "<span class="indexnavnamed">Simplon#3</span>" vous pouvez aller voir les pages des autres étudiants !</p>
            <p class="lastindexp">Prenez votre temps sur mon site, en espérant que vous apprécierez mon travail.</p>
            <p class="quote" id="indexquote">"Your <span class="quote" id="travel">travel</span> begin when YOU decide to make the <span class="quote" id="quotefirst">first step</span>"</p>
        </section>
    </main>
    <?php } ?>
</body>

</html>