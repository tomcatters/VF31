<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Réalisation du Hetzer</title>
        <link rel="stylesheet" href="Hetzer.css">
    </head>
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
    <header>
        <img src="FV214.jpg" alt="FV214" width="100%" height="400px">
    </header>
    <body>
        <h1 class="title">Guide de réalisation du JgPz. 38t Hetzer</h1>
        <p>
            <table class="table">
                <tr>
                    <td><a href="Manuel du Hetzer.pdf"><img src="Hetzer_Manual.jpg" alt="Manuel du Hetzer" width="400" height="300"></a></td>
                    <td><h3 class="border">Etapes de réalisation</h3>
                        <p>
                            <ol>
                                <li>Assemblage des éléments:</li>
                                <br>
                                <li>Application de la couche de peinture primaire:</li>
                                <br>
                                <li>Pré-Patinage:</li>
                                <br>
                                <li>Peinture finale:</li>
                            </ol>
                        </p>
                    </td>
                    <td><a href=""><img src="Hetzer_Primar.jpg" alt="Peinture de base du Hetzer" width="400" height="300"></a></td>
                </tr>
                <tr>
                    <td><h3 class="border">1) Plan de montage du Hetzer</h3>
                        <p class="TabTextAlign">Ci-joint le plan de montage du JgPz. 38t Hetzer de la marque Italeri n°6531 échelle 1/35.
                            <br>
                            <br>
                            Le Jagdpanzer 38(t), officiellement 7,5 cm PaK 39 L/48 auf Panzerjäger 38(t) (Sd.Kfz. 138/2) connu sous la mauvaise désignation de Hetzer1,2
                            (que l'on peut traduire par « traqueur » ou « piqueur » en allemand), est un chasseur de chars allemand de la Seconde Guerre mondiale, 
                            construit sur la base du châssis du Panzer 38(t) tchèque.
                            <br>
                            <br>(Source: <a href="https://fr.wikipedia.org/wiki/Jagdpanzer_38(t)">https://fr.wikipedia.org/wiki/Jagdpanzer_38(t)</a>).
                        </p>
                    </td>
                    <td><a href="infos.php"><img src="Hetzer_info.jpg" alt="Pz38.t_Hetzer" width="400" height="300"></a></td>
                    <td><h3 class="border">2) Application de la couche primaire</h3>
                        <br><p class="TabTextAlign">L’assemblage terminé, vous devez peindre avec une couche de peinture primaire pour uniformiser les différents éléments
                             constitutifs de votre maquette. Cette couche de peinture servira aussi pour que les autres peintures utilisées pour le camouflage puissent y adhérer.
                            C’est ce qu’on appelle une couche d’accroche. Les couleurs noire, grise et blanche sont les plus utilisées comme sous-couche. Dans notre cas, nous avons utilisé 
                            le noir primer de Vallejo. Noter que l'intégralité de la maquette doit être peinte avant de passer à l'étape suivante.</p>
                    </td>
                </tr>
                <tr>
                    <td><a href=""><img src="Hetzer_contrast.jpg" alt="" width="400" height="300"></a></td>
                    <td><h3 class="border">Pour plus d'informations</h3>
                        <p class="TabTextAlign">Pour plus d'informations sur le montage du Hetzer, les références des produits à utiliser, ou toutes autres questions à propos de la maquette, 
                            veuillez cliquer sur l'image ci-dessus.
                           <br><br>
                           Une zone de texte dans le formulaire est prévue pour poser vos questions à propos de cette réalisation.
                        </p>
                    </td>
                    <td><a href=""></a><img src="Hetzer.jpg" alt="Pz.38t Hetzer" width="400" height="300"></td>
                </tr>
                <tr>
                    <td><h3 class="border">3)Pré-Patinage</h3>
                        <p class="TabTextAlign">
                            L'étape de pré-patinage consiste à peindre avec des nuances de couleur (du gris foncé au blanc pur) les zones du blindé exposées aux conditions climatiques (Soleil, pluies, neige, gel, etc.). 
                            Exemple :  La peinture du haut du char, de la partie supérieure du canon, de la face avant et des côtés du châssis est soumise différemment au rayon du soleil et aux intempéries. (Voir photos) 
                            A vous de déterminer les zones que vous voulez éclaircir ou foncer.
                            Ces dégradés chromatiques différents vont ensuite apparaitre par transparence une fois la couche de peinture finale posée (le camouflage). 
                            C’est ce que l’on appelle le pré-patinage.
                        </p>
                    </td>
                    <td></td>
                    <td><h3 class="border">4)Peinture finale</h3>
                        <p class="TabTextAlign">
                            Pour l'étape finale, vous pouvez peindre votre camouflage sur base du pdf qui est fourni à l'étape n°1. 
                            Autre solution, faites votre choix en vous documentant sur les camouflages et les couleurs utilisés pour le Hetzer durant la 2ème guerre mondiale. 
                            Important, lors de la mise en peinture, respecter les temps de séchage entre chaque couche. 
                            Dans notre cas nous avons commencé par utiliser du jaune sable pour la couleur de base du camouflage. 
                            <br><br>
                            Lorsque vous commencez à peindre le camouflage, progressez couche par couche jusqu'au moment où vous le jugez satisfaisant. 
                            Vous limiterez ainsi le risque d'erreur. 
                            C’est la transparence de la peinture que vous utilisez qui laissera apparaitre le travail de pré-patinage. L’emploi d’une peinture mal diluée (pas assez) anéantira l’étape précédente.
                            Une fois le camouflage fini, il est temps de peindre les outils et accessoires qui se trouvent sur le char.
                            Pour les pots d'échappement, utiliser différentes teintes de peinture rouille, la plus claire étant de la rouille la plus récente.
                            Ensuite peignez les chenilles. 
                            Commencez d’abord par les peindre entièrement avec un mélange de brun-rouge et du noir. Patinez ensuite les chenilles avec différentes teintes de rouille et finissez par la poussière ou la boue en fonction de votre choix.
                        </p>
                    </td>
                </tr>
            </table>
            <h2 class="TdAlign">Cliquez sur l'image de votre choix</h2>
        </p>
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