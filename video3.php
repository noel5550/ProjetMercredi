<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="styleVideo.css" rel="stylesheet" media="all" type="text/css"> 
</head>
<body>
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Navigation</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Accueil</a>
    <h6><a href="video2.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Vidéo 1</a></h6>
    <h6><a href="video3.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Vidéo 2</a> </h6>
  </div>
</nav>

<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Projet Mecredi</span>
</header>
<!-- Effet de superposition lors de l'ouverture de la barre latérale -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:340px;margin-right:40px">


<br>

 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Vidéo et Images</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Vidéo 3</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>



<br>
<!--  <iframe width="420" height="315" -->
<!-- src="https://www.youtube.com/embed/xSGW7CwD5GM"> -->

<!-- </iframe>  -->

<video width="800" height="500" controls>
    <source src="video/video3.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
<br>

<a href="video/video3.mp4" download>
    <button type="submit" name="download" class="w3-button w3-red w3-padding-large w3-hover-black"><i class="fa fa-download"></i> Téléchargement</button>
</a>


 <h3 class="w3-xxxlarge w3-text-red"><b>Images de la vidéo</b></h3>
<?php

$dir1 = "frames/video3"; // changer le chemin
// Ouvre un dossier bien connu, et liste tous les fichiers
if ($dh1 = opendir($dir1))
{
    echo '<table>';
    echo "<tr>";

    while (($file1 = readdir($dh1)) !== false) {
       if (strlen($file1)>2)
        {
            echo "<td>
               
                 <div class='w3-row-padding'>
                    <div class='w3-half'>
                        <img src='frames/video3/$file1' height='100' width='200' style='width:250%'><br>
                   </div>
                 </div>
                  </td>
                
";
            
        }

    }
    echo "</tr>";
    echo "</table>";
    closedir($dh1);
}


/*$dir1 = "miniatures"; // changer le chemin
// Ouvre un dossier bien connu, et liste tous les fichiers
if ($dh1 = opendir($dir1))
{
    echo "<table>";
    echo "<tr>";
    while (($file1 = readdir($dh1)) !== false) {
        
        if (strlen($file1)>2)
        {
            if (strlen($file1) > 2 && $file1 != 'video3.jpg')
            {
                $video = explode('.',$file1);
                echo "<td><a href = $video[0].php ><img src='miniatures/$file1' height='100' width='100'></a></td>";
            }
        }
    }
    echo "</tr>";
    echo "</table>";
    closedir($dh1);
}*/
?>