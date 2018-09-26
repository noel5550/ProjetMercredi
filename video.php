<!--
    commande pour extraire une miniature
    ffmpeg -i input_file.mp4 -ss 00:00:5 -vframes 1 output.jpg

    -i input file           the path to the input file
    -ss 01:23:45            seek the position to the specified timestamp
    -vframes 1              only handle one video frame
    output.jpg              output filename, should have a well-known extension
-->
<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
    <h1>Super Projet de Mercredi 1</h1>

    <br>
    <a href="index.php">index</a>
    <br>

    <p>liste des videos</p>

<?php

$dir = "video"; // changé le chemin
// Ouvre un dossier bien connu, et liste tous les fichiers
if ($dh = opendir($dir))
{
    while (($file = readdir($dh)) !== false) {

        if (strlen($file)>2)
        {
            echo "  <video width= 320 height= 240  controls>";
            echo " <source src= video/$file type= video/mp4>";
            echo "  Your browser does not support the video tag.";
            echo " </video>";


        }
    }
        closedir($dh);
}

?>

</body>
</html>