    <?php
echo '<header class="mainheader" id="'.$page.'header">';
        if ($page === "Index") {}
        else {
            echo '<div id="botline">';
            echo '<h1>'.$page.'</h1>';
            echo '</div>';
        }
echo '</header>';
    ?>    