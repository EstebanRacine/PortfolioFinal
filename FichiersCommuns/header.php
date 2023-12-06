<?php

$index = null;
$contact = null;
$cv = null;
$projets = null;
$passions = null;

$path = $_SERVER['PHP_SELF'];
$file = basename ($path);
if ($file == "index.php"){
    $index = "underline";
}elseif($file=="passions.php"){
    $passions = "underline";
}elseif ($file == "cv.php"){
    $cv = "underline";
}elseif ($file=="contact.php") {
    $contact = "underline";
}elseif($file=="veille.php"){
    $veille = "underline";
}elseif ($file == "projets.php"){
    $projets = "underline";
}


?>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <img src="images/Logo_DevelopER.png" alt="Logo de Develop'ER" class="imgHeader">
    <nav id="Menu">
        <a href="index.php" id="navImg"><img src="images/Logo_DevelopER.png" alt="Mon Logo"></a>
        <a href="index.php" class="<?= $index ?>">Accueil</a>
        <a href="cv.php" class="<?= $cv ?>">Mon CV</a>
        <a href="projets.php" class="<?= $projets ?>">Mes projets</a>
        <a href="passions.php" class="<?= $passions ?>">Mes passions</a>
        <a href="veille.php" class="<?= $veille ?>">Veille Technologique</a>
        <a href="contact.php" class="<?= $contact ?>">Contact</a>
    </nav>
    <i class="fa-solid fa-bars" id="iconeMenu" onclick="apparitionMenu()"></i>
    <script src="JS/MenuNav.js"></script>
</header>