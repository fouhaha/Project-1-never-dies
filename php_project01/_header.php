<?php

$pageTitlePhp = $pageTitle . '.php';
switch($pageTitle) {
    case 'howto':
        $currentPageTitle = 'How to learn to code - Formations';
        break;
    case 'index':
        $currentPageTitle = 'How to learn to code - Accueil';
        break;
    case 'infos':
        $currentPageTitle = 'How to learn to code - Infos';
        break;
    case 'ressources':
        $currentPageTitle = 'How to learn to code - Ressources';
        break;
    case 'roadmap':
        $currentPageTitle = 'How to learn to code - Front ou Back ?';
        break;
}



?>










<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada|Roboto|Roboto+Condensed&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3fa526640b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <title><?php echo $currentPageTitle; ?></title> <!-- A CHANGER SELON LE NOM DE VOTRE PAGE -->
</head>

<body>
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"><i class="fab fa-connectdevelop fa-2x"></i>How To Learn To Code</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                $navbarArrayChoice = ['Acceuil' => 'index.php', 'Front ou Back' => 'roadmap.php', 'Formations' => 'howto.php', 'Ressources' => 'ressources.php', 'Infos' => 'infos.php'];
                foreach ($navbarArrayChoice as $selection => $page) {
                    if ($page == $pageTitlePhp) {
                        echo "<li class='nav-item'><a class='nav-link active' href=$page>$selection</a>
                            </li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link' href=$page>$selection</a>
                            </li>";
                    };
                };
                ?>
            </ul>
        </div>
    </nav>
