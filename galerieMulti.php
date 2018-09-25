
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>galerie</title>


</head>
<body>

<h1>Mignatures des videos</h1>

<a href="video.php">video</a>
<br>
<a href="index.php">index</a>
<br>
<a href="galerie.php">galerie image</a> <!-- dossier mignature -->
<br>
<a href="galerieMulti.php">galerie avec plein d'image de different moment de la video :)</a> <!-- dossier frames -->

<br><br>
<?php

$dir1 = "C:/wamp64/www/ProjetMercredi/frames/"; // changer le chemin
// Ouvre un dossier bien connu, et liste tous les fichiers
if ($dh1 = opendir($dir1))
{
    while (($file1 = readdir($dh1)) !== false) {
        if (strlen($file1)>2)
        {
            $dir2 = "C:/wamp64/www/ProjetMercredi/frames/".$file1; // changer le chemin
            if ($dh2 = opendir($dir2))
            {
            //    echo "<h1>$file1</h1>";
                echo "<h2><a href='video/$file1'>$file1</a></h2>";
                echo "</br>";

                echo "<table>";
                echo "<tr>";
                while(($file2 = readdir($dh2)) !== false)
                {
                    if (strlen($file2) > 2)
                    {
                        //echo "frames/$file1/$file2<br>";
                        echo "<td><img src='frames/$file1/$file2' height='250' width='400'></td>";
                    }

                }
                echo "</tr>";
                echo "</table>";
            }
            closedir($dh2);
        }
    }

    closedir($dh1);
}

?>


</body>
</html>