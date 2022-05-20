<?php
    session_start();
    require 'admin/lib/php/admin_liste_include.php'

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Site de construction de maquette</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="./admin/lib/js/fonctionJQuery.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/comon.css"/>
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/indexstyle.css"/>
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/Hetzer.css"/>
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/info.css"/>
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/register.css">
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/contactus.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="nav">
            <?php
                if(isset($_SESSION['id_cli'])){
                    echo '<a class="nav-link" aria-current="page" href="index_.php?page=accueil.php">Acceuil</a>
                            <a class="nav-link" href="index_.php?page=logout.php">déconnexion</a>
                            <a class="nav-link" href="index_.php?page=user.php">mon compte</a>';
                }
                else{
                    echo '<a class="nav-link" aria-current="page" href="index_.php?page=accueil.php">Acceuil</a>
                            <a class="nav-link" href="index_.php?page=register.php">se connecter</a>';
                }
            ?>
        </nav>
        <header id=header>
            <img src="./admin/images/FV214.jpg" alt="FV214" width=100% height="400px">
        </header>
        <div class="flex-wrapper">
            <div id="main">
                <?php
                if (!isset($_SESSION['page'])) {
                    $_SESSION['page'] = "pages/accueil.php";
                }
                if (isset($_GET['page'])) {
                    $_SESSION['page'] = $_GET['page'];

                }
                $path = './pages/' . $_SESSION['page'];

                if (file_exists($path)) {
                    include $path;
                } else {
                    include('pages/404.php');
                }
                ?>
            </div>
            <footer class="footer">
                <div>
                    <a class="nav-link" href="index_.php?page=contactus.php">Nous contacter</a>
                    <br><br>
                    <a class="nav-link" href="index_.php?page=AboutUs.php">À propos</a>
                </div>
                <p class="footer_rights">
                    Copyright © 2017-2022 Crawford-Industries.
                </p>
                <footer>
        </div>
    </body>
</html>