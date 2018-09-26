<html>

<style>
body, h1, h2, h3, h4, h5 {
	font-family: "Poppins", sans-serif
}

body {
	font-size: 16px;
}

.w3-half img {
	margin-bottom: -6px;
	margin-top: 16px;
	opacity: 0.8;
	cursor: pointer
}

.w3-half img:hover {
	opacity: 1
}
</style>
<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Projet du<br>mercredi</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
  </div>
</nav>

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