<?php
    $page = "About";
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
</body>
</html>