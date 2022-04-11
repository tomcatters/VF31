<?php
    session_start();
    require 'admin/lib/php/admin_liste_include.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Site de construction de maquette</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/indexstyle.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="nav">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<a href="pages/logout.php">déconnexion</a>
                            <a href="pages/user.php">compte</a>';
                }
                else{
                    echo '<a href="pages/register.php">se connecter</a>';
                }
            ?>
        </nav>
        <header id=header>
            <img src="./admin/images/FV214.jpg" alt="FV214" width=100% height="400px">
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
                            <a href=""><img src="./admin/images/T34.jpg" alt="T34/76" width="400" height="300"></a>
                        </td>
                        <td>
                            <a href=""><img src="./admin/images/M3Stuart.jpg" alt="M3 Stuart" width="400" height="300"></a>
                        </td>
                        <td>
                            <a href="./pages/Hetzer.php"><img src="./admin/images/Hetzer.jpg" alt="Pz.38t Hetzer" width="400" height="300"></a>
                        </td>
                        <td>
                            <a href=""><img src="./admin/images/Panther.jpg" alt="hetzer" width="400" height="300"></a>
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