<?php
    $page = "Index";
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
        <div id="space"></div>
        <section class="mainsec" id="indexcont">
            <h1 id="welcome">Welcome to <span class="title">Arcanae</span>'s page.</h1>
            <p>Hey! I'm Justin, student at <a href="http://lyon.simplon.co/" id="simplon">Si<span id="simp">mpl</span>on<span id="lon">.co</span></a>.</p>
            <p>Use the "<span class="indexnavnamed">About</span>" section at the left, if you want to know more about me.</p>
            <p>You can see my main projects in the "<span class="indexnavnamed">Works</span>" section.</p>
            <p class="lastindexp">And then you can return/see the pages of my comrades with the "<span class="indexnavnamed">Simplon#3</span>" link.</p>
            <p class="lastindexp">Take your time visiting my website, my works are pretty cool !</p>
            <p id="indexquote">"Your <span id="travel">travel</span> begin when YOU decide to make the <span id="quotefirst">first step</span>"</p>
        </section>
    </main>
</body>

</html>