<?php
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/projets.css">
    <title>Mes projets</title>
</head>
<body>

<?php
include "FichiersCommuns/header.php";
?>

<div class="contenuProjet">
    <h1>Mes différents projets</h1>

    <div class="carroussel">

        <article id="ETC">
            <div class="contenuArticle">
                <h2>ETC (Enroule Ton Câble)</h2>
                <a href="infoProj.php?projet=ETC">+ d'infos</a>
            </div>
        </article>

        <article id="BestStudents">
            <div class="contenuArticle">
                <h2>BestStudents</h2>
                <a href="infoProj.php?projet=BestStudents">+ d'infos</a>
            </div>
        </article>

        <article id="Carottos">
            <div class="contenuArticle">
                <h2>Carottos</h2>
                <a href="infoProj.php?projet=Carottos">+ d'infos</a>
            </div>
        </article>

    </div>
</div>

<?php
include "FichiersCommuns/footer.php";
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="JS/slickProjets.js"></script>
</body>
</html>
