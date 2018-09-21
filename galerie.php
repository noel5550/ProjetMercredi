
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>galerie</title>


</head>
<body>

<h1>Mignatures des videos</h1>

<?php

    $dir = "C:/wamp64/www/ProjetMercredi/mignature/"; // changé le chemin
    // Ouvre un dossier bien connu, et liste tous les fichiers
    if ($dh = opendir($dir))
    {
        while (($file = readdir($dh)) !== false) {
            if (strlen($file)>2)
            {
                echo "<img src='mignature/$file' height='250' width='400'>";
            }
        }
        closedir($dh);
    }

?>


</body>
</html>