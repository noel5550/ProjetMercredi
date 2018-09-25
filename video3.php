<!DOCTYPE html>
<html>
<body>

<h1>Super Projet de Mercredi 1</h1>

<p>Vidéo 3</p>
<a href="index.php">index</a>

<br>
<!--  <iframe width="420" height="315" -->
<!-- src="https://www.youtube.com/embed/xSGW7CwD5GM"> -->

<!-- </iframe>  -->

<video width="400" height="300" controls>
    <source src="video/video3.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>


<a href="video/video3.mp4" download>
    <button type="submit" name="download" class="btn"><i class="fa fa-download"></i> Download</button>
</a>


<?php

$dir1 = "C:/wamp64/www/ProjetMercredi/frames/video3"; // changer le chemin
// Ouvre un dossier bien connu, et liste tous les fichiers
if ($dh1 = opendir($dir1))
{
    echo '<table>';
    echo "<tr>";

    while (($file1 = readdir($dh1)) !== false) {
       if (strlen($file1)>2)
        {
            echo "<td><img src='frames/video3/$file1' height='150' width='200'></td>";
        }

    }
    echo "</tr>";
    echo "</table>";
    closedir($dh1);
}
?>