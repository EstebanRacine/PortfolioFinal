<?php
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="shortcut icon" href="images/LogoOnglet.png" />
    <title>Esteban Racine - Accueil</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DGNMBFFVZ2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DGNMBFFVZ2');
</script>

<body>

<?php
include "FichiersCommuns/header.php"
?>

<div class="contenuIndex">
    <div class="pres1">
        <div class="textEcrit">
            <h2 id="h1Start">Bienvenue</h2>
        </div>
        <div class="textEcrit">
            <h2 id="h1Middle">sur le portfolio</h2>
        </div>
        <div class="textEcrit">
            <h2 id="h1End">d'Esteban Racine</h2>
        </div>
        <i class="fa-solid fa-arrow-down" onclick="window.scrollBy(0, window.innerHeight);"></i>

    </div>
    <div class="quiSuisJe">
        <h1>Qui Suis-je ?</h1>
        <div class="infosPerso">
            <img src="images/index/moi2.jpg" alt="Image d'Esteban Racine">
            <p>
                Je suis Esteban RACINE, étudiant en BTS SIO au lycée Louis Pergaud. Je me suis toujours
                intéressé au fonctionnement des objets. À leurs conceptions, à leurs utilisations ou encore
                à leurs utilisateurs. J'ai adoré comprendre le fonctionnement de la machine à vapeur ou
                analyser le type de personne qui vont acheter le dernier Iphone. Cet intérêt pour la nouveauté
                m'a amené vers le milieu de l'informatique. Je connaissais évidemment le côté extérieur et
                visuel que nous côtoyons tous chaque jour mais depuis mon année de 1re j'ai découvert
                l'intérieur, le développement plus particulièrement. Comprendre comment un site internet ou
                une application mobile fonctionne me fascine, c'est pourquoi je me suis dirigé dans ce milieu
                à la fois intéressant et important au vu du nombre d'utilisateurs du net aujourd'hui.
            </p>
        </div>
    </div>
</div>


<?php
include "FichiersCommuns/footer.php"
?>

</body>
</html>