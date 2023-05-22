<?php
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/cv.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/LogoOnglet.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Mon CV</title>
</head>
<body>

<?php
include "FichiersCommuns/header.php";
?>

<div class="contenuCV">
    <h1>MON CV</h1>
    <div class="infosBases">
        <div class="imgID">
            <img src="images/cv/imgCV.jpg" alt="Image d'Esteban RACINE">
            <h1>ESTEBAN <br> RACINE</h1>
            <h2 id="metier">ÉTUDIANT EN BTS SIO</h2>
            <h2 id="descrMetier">(SERVICES INFORMATIQUES AUX ORGANISATIONS)</h2>
        </div>
        <div class="descriptionID">
            <h3>PROFIL PERSONNEL</h3>
            <p>Je suis actuellement un étudiant de 18 ans 1ère année de BTS SIO (Services Informatiques aux Organisations)
             au lycée Louis Pergaud de Besançon. Je souhaite devenir développeur web et cherche à m'améliorer continuellement.</p>
        </div>
        <div class="qualites">
            <h3>QUALITÉS</h3>
            <ul>
                <li>Autonome</li>
                <li>Curieux</li>
                <li>Motivé</li>
                <li>Créatif</li>
                <li>Bonne gestion du stress</li>
                <li>Travail d'équipe</li>
            </ul>
        </div>
        <div class="coordonnees">
            <h3>COORDONNÉES</h3>
            <ul>
                <div class="ligne"><i class="fa-solid fa-phone"></i> <li> 06 31 68 70 17</li></div>
                <div class="ligne"><i class="fa-solid fa-envelope"></i> <li> esteban.racineecole@gmail.com</li></div>
                <div class="ligne"><i class="fa-solid fa-house"></i><li id="adresseCV"> 44 rue de Salans <br> 39700 FRAISANS</li></div>
            </ul>
        </div>
    </div>
    <div class="infosPlus">
        <div class="blocInfosPlus" id="expPro">
            <h1>EXPÉRIENCE PROFESSIONNELLE</h1>
            <div class="contenuBloc" id="blocHautExp">
                <h2>Stage d'observation</h2>
                <h3>à INFOFIL</h3>
                <p> - Stage de 3 jours dans une entreprise de développement de logiciel. J'y ai découvert le secteur
                informatique. J'ai commencé à coder de petits logiciels à sa suite.</p>
            </div>
        </div>
        <div class="blocInfosPlus">
            <h1>FORMATION ET DIPLÔMES</h1>
            <div class="contenuBloc" id="blocHautForm">
                <h2>Lycée Charles Nodier</h2>
                <h3>Baccalauréat Général (2022) - Mention "Bien"</h3>
                <p> - Spécialités "Mathématiques" et "Numérique et Sciences Informatiques" / Ecodélégué</p>
            </div>
            <div class="contenuBloc">
                <h2>Collège Gustave Eiffel</h2>
                <h3>Brevet des collèges (2019) - Mention "Très Bien"</h3>
                <p>Surveillant du foyer des élèves</p>
            </div>
            <div class="contenuBloc">
                <h2>Permis B</h2>
                <h3>Acquis en 2023</h3>
            </div>
        </div>
        <div class="blocInfosPlus">
            <h1>COMPÉTENCES</h1>
            <div class="contenuBloc">
                <ul>
                    <li>Développement de programmes en Python et en PHP</li>
                    <li>Création de site web et HTML / CSS / JAVASCRIPT</li>
                    <li>Niveau de langue B1 en Anglais</li>
                    <li>Niveau de langue B1 en Allemand</li>
                </ul>
            </div>
        </div>
        <div class="blocInfosPlus">
            <h1>INTÉRÊTS ET LOISIRS</h1>
            <div class="contenuBloc">
                <p id="textLoisir">Je suis un très grand fan de jeux vidéo, de théatre et de musique. Je pratique un peu de piano mais en
                    écoute plus que je n'en joue et j'adore monter sur scène pour clamer un texte. Mes passions bien que
                    différentes m'ont permis de devenir plus persévérant et de prendre confiance en moi.</p>
            </div>
        </div>
    </div>
    <a href="projets.php">Découvrez mes projets</a>
    <a href="fichiersAutres/CV_Esteban_RACINE.pdf" download><i class="fa-solid fa-file-pdf"></i> Téléchargez le fichier</a>
</div>

<?php
include "FichiersCommuns/footer.php";
?>

</body>
</html>
