<?php
    $page = "About";
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
    <title>Arcanae - About</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php include("nav.php"); ?>
    <main>
        <?php include("header.php"); ?>
    <?php if($_SESSION['language'] == 'English') {?>
        <div id="space"></div>
        <section class="mainsec" id="aboutcont">
            <p class="aboutp">Hey, my name is Justin Courdesse I'm 18, student at <a href="http://lyon.simplon.co/" id="simplon">Si<span id="simp">mpl</span>on<span id="lon">.co</span></a>.</p>
            <p class="aboutp">My hobbies are <span class="hobbies">music</span>, <span class="hobbies">video games</span>, <span class="hobbies">editing quotes</span> and <span class="hobbies">code</span> (of course).</p>
            <p class="hobbiesdes"><span class="titles">Music</span>: I have a <a target="_blank" href="https://www.youtube.com/c/ncarcanae">YouTube</a> channel where I post some retouched music (by me) for everyone who'd like to hear them.</p>
            <p class="hobbiesdes"><span class="titles">Code</span>: There is my <a target="_blank" href="https://github.com/arcanae">GitHub</a> if you want to see the "origins" of my projects.</p>
            <p class="hobbiesdes"><span class="titles">Quotes</span>: Maybe you've seen the picture on home page, thats a quote I made then edited it on an image. I have some more but nowhere to display them for the moment, it will maybe come later on this website.</p>
            <p>You can contact me at: <span id="mail">justin.courdesse@gmail.com</span> .</p>
            <p id="quote">"We don't <span id="fear">fear</span> the <span id="hardwork">hard work</span>, because <span id="icwt">In C<span id="spancode">ode</span> We T<span id="spanrust">rust</span></span>"</p>
        </section>
    </main>
    <?php }?>
    <?php if($_SESSION['language'] == 'Français') {?>
        <div id="space"></div>
        <section class="mainsec" id="aboutcont">
            <p class="aboutp">Hey, je m'appelle Justin Courdesse j'ai 18 ans et je suis étudiant chez <a href="http://lyon.simplon.co/" id="simplon">Si<span id="simp">mpl</span>on<span id="lon">.co</span></a>.</p>
            <p class="aboutp">Mes passions sont la <span class="hobbies">musique</span>, les <span class="hobbies">jeux vidéos</span>, <span class="hobbies">"quotes editing"</span> et le <span class="hobbies">code</span> (bien sûr!).</p>
            <p class="hobbiesdes"><span class="titles">Musique</span>: J'ai une chaine <a target="_blank" href="https://www.youtube.com/c/ncarcanae">YouTube</a> sur laquelle je poste des musiques retouchées (par moi), n'hésitez pas à y jeter un oeil.</p>
            <p class="hobbiesdes"><span class="titles">Code</span>: Voici le lien de mon <a target="_blank" href="https://github.com/arcanae">GitHub</a> si vous voulez voir les "origines" de mes projets.</p>
            <p class="hobbiesdes"><span class="titles">Quotes Editing</span>: Littéralement "édition de citations", comme vous pouvez le constater en bas de cette page ou sur la page d'accueil je prends des citations et les édite sur des images pour passer le temps.</p>
            <p>Vous pouvez me contacter à l'adresse : <span id="mail">justin.courdesse@gmail.com</span> .</p>
            <p id="quote">"We don't <span id="fear">fear</span> the <span id="hardwork">hard work</span>, because <span id="icwt">In C<span id="spancode">ode</span> We T<span id="spanrust">rust</span></span>"</p>
        </section>
    </main>
    <?php } ?>
</body>
</html>