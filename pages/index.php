<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Site de construction de maquette</title>
        <link rel="stylesheet" href="indexstyle.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <nav class="nav">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<a href="logout.php">déconnexion</a>
                            <a href="user.php">compte</a>';
                }
                else{
                    echo '<a href="register.php">se connecter</a>';
                }
            ?>
        </nav>
        <header id=header>
            <img src="FV214.jpg" alt="FV214" width=100% height="400px">
        </header>
        <div>
            <p>
                <h3 id="intro">Bienvenue sur ce site de construction et de peinture de maquette. Ce site vous présentera un guide sur la réalisation complète
                <br>
                et détaillée d'une maquette en commençant par la construction de ladite maquette jusqu'à la peinture finale, en passant par l'étape
                <br>
                de peinture de base et pré-patinage.</h3>
            </p>
            <div>
                <table class="TableAlign">
                    <tr>
                        <td>
                            <a href=""><img src="T34.jpg" alt="T34/76" width="400" height="300"></a>
                        </td>
                        <td>
                            <a href=""><img src="M3Stuart.jpg" alt="M3 Stuart" width="400" height="300"></a>
                        </td>
                        <td>
                            <a href="Hetzer.php"><img src="Hetzer.jpg" alt="Pz.38t Hetzer" width="400" height="300"></a>
                        </td>
                        <td>
                            <a href=""><img src="Panther.jpg" alt="hetzer" width="400" height="300"></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="TdAlign"><h3 class="border">T-34/76</h3></td>
                        <td class="TdAlign"><h3 class="border">M3 Stuart</h3></td>
                        <td class="TdAlign"><h3 class="border">JgPz. 38t Hetzer</h3></td>
                        <td class="TdAlign"><h3 class="border">Pz.Kpfw. V Panther</h3></td>
                    </tr>
                </table>

                <h2 class="TdAlign">Cliquez sur l'image de votre choix</h2>
            </div>
        </div>
        <footer class="footer">
            <div>
                <a href="ContactUs.php">Nous contacter</a>
                <br><br>
                <a href="AboutUs.php">À propos</a>
            </div>
            <p class="footer_rights">
                Copyright © 2017-2020 Crawford-Industries.
            </p>
        <footer>
    </body>
</html>