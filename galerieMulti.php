
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>galerie</title>


</head>
<body>

<h1>Mignatures des videos</h1>

<?php
//TODO :  complété
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
                while(($file2 = readdir($dh2)) !== false)
                {
                   var_dump($file2);
                }
            }
            closedir($dh2);
        }
    }

    closedir($dh1);
}

?>


</body>
</html>