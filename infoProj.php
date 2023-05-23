<?php
$imgETC = "images/projets/ETC/";
$imgBS = "images/projets/BestStudents/";
$imgCarottos = "images/projets/Carottos/";

$ETC = ["nom"=>"ETC", "annee"=>2023, "logo"=>"images/projets/ETC/logo.png", "descr"=>"ETC (Enroule Ton câble) est une micro entreprise 
crée par le BTS GPME du lycée Louis Pergaud. Ce site sert de vitrine pour leur produit et permet de présenter l'envers du décor et les collaborateurs.",
    "img"=>[$imgETC."index2.PNG", $imgETC."produit.PNG", $imgETC."quiSommesNous.PNG", $imgETC."contact.PNG"], "lien"=>"https://enrouletoncable.fr"];

$BestStudents = ["nom"=>"BestStudents", "annee"=>2022, "logo"=>$imgBS."logo.png", "descr"=>"BestStudents est un projet crée au cours 
de ma première année de BTS. Le principe était de faire une base de donnée répertoriant des élèves. Nous pouvons y rechercher les élèves 
par classe ou encore faire des demandes via formulaire qui seront ensuite gérées par un administrateur.",
    "img"=>[$imgBS."index2.png", $imgBS."ajoutEtudiant.png" ,$imgBS."gestionDemandes.PNG", $imgBS."contact.png"]];

$Carottos = ["nom"=>"Carottos", "annee"=>2023, "logo"=>$imgCarottos."logo.png", "descr"=>"Carottos est une entreprise crée de toute pièce 
afin de s'entrainer à gérer des sessions, des paniers et des commandes le tout enregistré dans une base de donnée. J'ai commencer à approcher pour 
la première fois Javascript grâce à ce projet.",
    "img"=>[$imgCarottos."index2.png", $imgCarottos."produit.PNG", $imgCarottos."panier.PNG", $imgCarottos."validationPanier.png"]];

$projet = $_GET['projet'];
if ($projet == "Carottos"){
    $actuel = $Carottos;
}elseif ($projet == "ETC"){
    $actuel = $ETC;
}elseif ($projet == "BestStudents"){
    $actuel = $BestStudents;
}




?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/infosProj.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/LogoOnglet.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Projet : <?= $actuel["nom"] ?></title>
</head>
<body>
<?php
include "FichiersCommuns/header.php";
?>
<div class="contenuInfosProj">
    <h1 class="<?= $actuel["nom"] ?>"><?= $actuel["nom"] ?> <a id="flecheRetour" class="<?= $actuel["nom"] ?>" href="projets.php"><i class="fa-solid fa-arrow-left"></i></a></h1>
    <div class="infosProj">
        <img src="<?= $actuel["logo"] ?>" alt="Logo de <?= $actuel["nom"] ?>">
        <h3><?= $actuel["annee"] ?></h3>
        <p><?= $actuel["descr"] ?></p>
        <?php
        if (isset($actuel['lien'])){
            $ligne = "<a target='_blank' class='".$actuel["nom"]."' id='lienExterne' href='".$actuel["lien"]."'>Voir le site</a>";
            echo $ligne;
        }else{
            echo "<p id='nonPub'>Projet non publié</p>";
        }
        ?>
    </div>
    <div class="images">
        <img id="imgPrincipale" src="<?= $actuel["img"][0] ?>" alt="Image principale">
        <div class="gridImages">
            <?php
            foreach ($actuel["img"] as $image){
            ?>

                <img src="<?= $image ?>" alt="Image du site" onclick="document.getElementById('imgPrincipale').src = '<?= $image ?>'">

            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include "FichiersCommuns/footer.php";
?>
</body>
</html>
