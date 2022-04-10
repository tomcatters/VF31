<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>À propos</title>
        <link rel="stylesheet" href="AboutUs.css">
    </head>
    <body>
        <nav class="nav">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<a href="logout.php">déconnexion</a>
                        <a href="user.php">compte</a>
                        <a href="index.php">Acceuil</a>';
                }
                else{
                    echo '<a href="register.php">se connecter</a>
                    <a href="index.php">Acceuil</a>';
                }
            ?>
        </nav>
        <header id=header>
            <img src="FV214.jpg" alt="FV214" width=100% height="400px">
        </header>
        <div class="texte">
            <h1>Crawford-Industries, guide de construction de maquette depuis 2017.</h1>
            <p>
                Nous sommes une petite firme familiale qui vous fournit des guides d'assemblage et de peinture de maquettes en 1/35 et 1/72.
                Nous ne prétendons pas être des professionnels, nous assemblons des maquettes de différentes marque sur notre temps libre pour
                notre plaisir personnel. Généralement nous mettons à votre disposition un nouveau guide de montage de char ou de tout autre 
                véhicule dans un délai de 3 à 4 semaines. Les guides de montage sont totalement gratuits.
                Ces guides comportent un manuel de montage de la maquette sous format PDF, une description sous 4 étapes complètes et détaillées pour la
                peinture et finition de la maquette choisie et pour finir une rubrique qui vous est dédiée pour obtenir plus d'informations sur la maquette. 
            </p>
        </div>
        <footer class="footer">
            <div>
                <br>
                <a href="ContactUs.php">Nous contacter</a>
            </div>
            <p class="footer_rights">
                Copyright © 2017-2020 Crawford-Industries.
            </p>
        <footer>
    </body>
</html>