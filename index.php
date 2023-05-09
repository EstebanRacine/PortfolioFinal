<?php
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="shortcut icon" href="images/LogoOnglet.png" />
    <title>Accueil</title>
</head>
<body>

<?php
include "FichiersCommuns/header.php"
?>

<div class="contenuIndex">
    <div class="pres1">
        <div class="textEcrit">
            <h1 id="h1Start">Bienvenue</h1>
        </div>
        <div class="textEcrit">
            <h1 id="h1Middle">sur le portfolio</h1>
        </div>
        <div class="textEcrit">
            <h1 id="h1End">d'Esteban Racine</h1>
        </div>
        <i class="fa-solid fa-arrow-down" onclick="window.scrollBy(0, window.innerHeight);"></i>

    </div>
    <div class="quiSuisJe">
        <h1>Qui Suis-je ?</h1>
        <div class="infosPerso">
            <img src="images/index/moi.jpg" alt="Image d'Esteban Racine">
            <p>
                Je suis Esteban RACINE, étudiant en BTS SIO au lycée Louis Pergaud. Je me suis toujours
                interessé au fonctionnement des objets. À leurs conceptions, à leurs utilisations ou encore
                à leurs utilisateurs. J'ai adoré comprendre le fonctionnement de la machine à vapeur ou
                analyser le type de personnes qui vont acheter le dernier Iphone. Cet interêt pour la nouveauté
                m'a amené vers le milieu de l'informatique. Je connaissais evidemment le coté exterieur et
                visuel que nous cotoyons tous chaque jour mais depuis mon année de 1ère j'ai découvert
                l'interieur, le développement plus particulièrement. Comprendre comment un site internet ou
                une application mobile fonctionne me fascine, c'est pourquoi je me suis dirigé dans ce milieu
                à la fois intéressant et important au vu du nombre d'utilisateur du net aujourd'hui.
            </p>
        </div>
    </div>
</div>


<?php
include "FichiersCommuns/footer.php"
?>

</body>
</html>
