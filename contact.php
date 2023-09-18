<?php

$nom = null;
$prenom = null;
$mail = null;
$objet = null;
$message = null;

if ($_SERVER['REQUEST_METHOD']=="POST") {

    $erreurs = [];

    if (empty(trim($_POST['nom']))) {
        $erreurs['nom'] = "Veuillez remplir le champs Nom";
    } else {
        $nom = $_POST['nom'];
    }

    if (empty(trim($_POST['prenom']))) {
        $erreurs['prenom'] = "Veuillez remplir le champs Prénom";
    } else {
        $prenom = $_POST['prenom'];
    }

    if (empty(trim($_POST['mail']))) {
        $erreurs['mail'] = "Veuillez remplir le champs Mail";
    } else {
        $mail = $_POST['mail'];
    }

    if (empty(trim($_POST['objet']))) {
        $erreurs['objet'] = "Veuillez remplir le champs Objet";
    } else {
        $objet = $_POST['objet'];
    }

    if (empty(trim($_POST['message']))) {
        $erreurs['message'] = "Veuillez écrire un message";
    } else {
        $message = $_POST['message'];
    }

    if (empty($erreurs)){
        $headers = [
            "From"=>$mail,
            "content-type"=>"text/plain; charset=utf-8",
        ];
        $message = "Message de $prenom $nom : ".PHP_EOL.$message;
        if(mail("contact@esteban-racine.fr", $objet, $message, $headers)) {
            $nom = null;
            $prenom = null;
            $mail = null;
            $objet = null;
            $message = null;
            echo "<script> window.alert('Votre message a bien été envoyé') </script>";
        }else{
            echo "<script> window.alert(\"Erreur lors de l'envoi, veuillez recommencer\") </script>";
        }
    }

}

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
include "FichiersCommuns/header.php";
?>

<div class="contenuContact">
    <h1>Contactez moi</h1>
    <div class="gridInfos">
        <div class="infosPerso">
            <a href="tel:0631687017"> <i class="fa-solid fa-phone"></i> 06 31 68 70 17</a>
            <a href="mailto:esteban.racineecole@gmail.com"><i class="fa-solid fa-envelope"></i> esteban.racineecole@gmail.com</a>
            <p> <i class="fa-solid fa-house"></i> 13 rue du Muguet, Apt 24</p>
            <p>Besançon 25000</p>
        </div>
        <img src="images/contact/imgContact.jpg" alt="Image de clavier rétroéclairé.">
    </div>
    <h1 id="nameFormu">Formulaire de contact</h1>
    <form action="" method="post">
        <label for="Nom">Nom <span class="Rouge">*</span></label>
        <input type="text" value="<?= $nom ?>" name="nom" id="nom">
        <?php
        if (isset($erreurs['nom'])){
            echo "<h3 class='Rouge'>{$erreurs['nom']}</h3>";
        }
        ?>

        <label for="prenom">Prénom <span class="Rouge">*</span></label>
        <input type="text" value="<?= $prenom ?>" name="prenom" id="prenom">
        <?php
        if (isset($erreurs['prenom'])){
            echo "<h3 class='Rouge'>{$erreurs['prenom']}</h3>";
        }
        ?>

        <label for="mail">Email <span class="Rouge">*</span></label>
        <input type="text" value="<?= $mail ?>" name="mail" id="mail">
        <?php
        if (isset($erreurs['mail'])){
            echo "<h3 class='Rouge'>{$erreurs['mail']}</h3>";
        }
        ?>


        <label for="objet">Objet <span class="Rouge">*</span></label>
        <input type="text" value="<?= $objet ?>" id="objet" name="objet">
        <?php
        if (isset($erreurs['objet'])){
            echo "<h3 class='Rouge'>{$erreurs['objet']}</h3>";
        }
        ?>


        <label for="message">Votre message <span class="Rouge">*</span></label>
        <textarea name="message" id="message" cols="30" rows="10"><?= $message ?></textarea>
        <?php
        if (isset($erreurs['message'])){
            echo "<h3 class='Rouge'>{$erreurs['message']}</h3>";
        }
        ?>


        <button id="buttonSend" type="submit">Envoyer</button>
        <p class="Rouge" id="infoAsterisque">* : champs obligatoires</p>
    </form>
</div>


<?php
include "FichiersCommuns/footer.php";
?>
</body>
</html>