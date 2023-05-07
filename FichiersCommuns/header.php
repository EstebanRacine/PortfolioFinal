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
}elseif ($file=="contact.php"){
    $contact = "underline";
}elseif ($file == "projets.php"){
    $projets = "underline";
}


?>

<nav>
    <a href="index.php" id="navImg"><img src="images/Logo_DevelopER.png" alt="Mon Logo"></a>
    <a href="index.php" class="<?= $index ?>">Accueil</a>
    <a href="cv.php" class="<?= $cv ?>">Mon CV</a>
    <a href="projets.php" class="<?= $projets ?>">Mes projets</a>
    <a href="passions.php" class="<?= $passions ?>">Mes passions</a>
    <a href="contact.php" class="<?= $contact ?>">Contact</a>
</nav>
