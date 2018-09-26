<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="styleaccueil.css" />
<title>Projet</title>

<body>

	<!--         <h1>projet mercredi</h1> -->
	<br>

	<!--         <a href="video.php">video</a> -->
	<!--         <br> -->
	<!--         <a href="galerie.php">galerie image</a>  -->
	<!--         <br> -->
	<!--         <a href="galerieMulti.php">galerie avec plein d'image de different moment de la video :)</a>  -->


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Vidéo</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Accueil</a> 
  </div>
</nav>
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Projet Mercredi</span>
</header>

<div class="w3-main" style="margin-left:400px;margin-right:40px">


<div class="w3-container" style="margin-top:20px" id="showcase">
	<h1 class="w3-jumbo"><b>Galerie des videos</b></h1>
</div>
		<div class="gallery">
        <?php
        $dir = "miniatures"; // changé le chemin
                             // Ouvre un dossier bien connu, et liste tous les fichiers
        if ($dh = opendir($dir)) {
            echo '<table>';
            while (($file = readdir($dh)) !== false) {

                echo '<tr>';
                if (strlen($file) > 2) {
                    $video = explode('.', $file);
                    echo "<td><a href='$video[0].php'><img src='miniatures/$file' height='250' width='400'></a></td>";
                }
                echo '</tr>';
            }
            echo "</table>";
            closedir($dh);
        }
        
        ?>
        </div>
    </body>
</head>
</html>