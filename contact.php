<?php

$nom = null;
$prenom = null;
$objet = null;
$message = null;

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/LogoOnglet.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
<?php
include "FichiersCommuns/header.php";
?>

<div class="contenuContact">
    <h1>Contactez moi</h1>
    <div class="gridInfos">
        <div class="infosPerso">
            <a href="tel:0631687017"> <i class="fa-solid fa-phone"></i> 06 31 68 70 17</a>
            <a href="mailto:esteban.racineecole@gmail.com"><i class="fa-solid fa-envelope"></i> esteban.racineecole@gmail.com</a>
            <p> <i class="fa-solid fa-house"></i> 13 rue du Muguet, Apt 24 <br> Besançon 25000</p>
        </div>
        <img src="images/contact/imgContact.jpg" alt="Image de clavier rétroéclairé.">
    </div>
    <h2>Formulaire de contact</h2>
    <form action="" method="post">
        <label for="Nom">Nom</label>
        <input type="text" value="<?= $nom ?>" name="nom" id="nom">
        <label for="prenom">Prénom</label>
        <input type="text" value="<?= $prenom ?>" name="prenom" id="prenom">
        <label for="objet">Objet</label>
        <input type="text" value="<?= $objet ?>" id="objet" name="objet">
        <label for="message">Votre message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <button type="submit">Envoyer</button>
    </form>
</div>


<?php
include "FichiersCommuns/footer.php";
?>
</body>
</html>
