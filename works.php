<?php
    session_start();
    if (!isset($_SESSION['language'])){
        $_SESSION['language'] = 'English';
    }
    if (isset($_POST['language'])) {
        $language = $_POST['language'];
        $_SESSION['language'] = $language;
    }
    if($_SESSION['language'] == 'English') {
        $page = "Works";
    }
    if($_SESSION['language'] == 'Français') {
        $page = "Projets";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arcanae - Works</title>
    <link rel="stylesheet" href="style.css"/> 
</head>
<body>
    <?php include("nav.php"); ?>
    <main>
        <?php include("header.php"); ?>
        <div id="space"></div>        
        <section class="mainsec" id="workscont">
            <?php

             $open = scandir("../works/");
             
        foreach($open as $key => $value) {
            if ($key === 0 OR $key === 1) {}
            else {
                echo '<article class="projectarticle">';
                echo '<div class="projectcont">';
                echo '<h2 class="projectname"><a target="_blank" href="../works/'.$value.'/" class="projectname">';
                echo strtoupper($value);
                echo '</a></h2>';
                echo '<a target="_blank" href="../works/'.$value.'/"><img class="projectscreen" src="../works/'.$value.'/screen.png">';
                echo '</a>';
                if($_SESSION['language'] == 'English') {
                    $handle = fopen("../works/".$value."/info.txt", "r");
                    $read = fread($handle, filesize("../works/".$value."/info.txt"));
                    $read = htmlspecialchars($read);
                    $read = str_replace("\n", "</br>", $read);
                    echo '<p class="projectp">'.$read.'</p>';
                }
                if($_SESSION['language'] == 'Français') {
                    $handle = fopen("../works/".$value."/infofr.txt", "r");
                    $read = fread($handle, filesize("../works/".$value."/infofr.txt"));
                    $read = htmlspecialchars($read);
                    $read = str_replace("\n", "</br>", $read);
                    echo '<p class="projectp">'.$read.'</p>';
                }
                echo '</div>';
                echo '</article>';
            }
        }

            
       ?>
        </section>
    </main>
</body>
</html>