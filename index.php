<html>

<body>

<!--         <h1>projet mercredi</h1> -->
        <br><br>

<!--         <a href="video.php">video</a> -->
<!--         <br> -->
<!--         <a href="galerie.php">galerie image</a>  -->
<!--         <br> -->
<!--         <a href="galerieMulti.php">galerie avec plein d'image de different moment de la video :)</a>  -->



        <h1>Gallerie des videos</h1>

        <?php

        $dir = "miniatures"; // changé le chemin
        // Ouvre un dossier bien connu, et liste tous les fichiers
        if ($dh = opendir($dir))
        {
            echo '<table>';
            while (($file = readdir($dh)) !== false) {

                echo '<tr>';
                if (strlen($file)>2)
                {
                    $video= explode('.',$file);
                    echo "<td><a href='$video[0].php'><img src='miniatures/$file' height='250' width='400'></a></td>";
                }
                echo '</tr>';
            }
            echo "</table>";
            closedir($dh);
        }

        ?>
    </body>
</html>