<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Plus information</title>
        <link rel="stylesheet" href="info.css">
        <meta charset="UTF-8">
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
        <h1 class="title">Demande d'informations complémentaires</h1>
        <div>
            <form action="infosSend.php" method="post">
                <table>
                    <tr>
                        <th colspan="2">
                            <h3>Les rubriques obligatoires sont indiquées par *</h3>
                        </th>
                    </tr>
                        <?php
                            if(!isset($_SESSION['userId'])){
                                echo'<tr><td>veuillez vous connecter ! </td>
                                <td><a href="register.php">se connecter</a></td></tr>';
                            }
                        ?>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['userNom'])){
                                echo '<td><label for="nom">Nom:*</label></td>
                                <td>?</td>';
                            }
                            else{
                                echo '<td><label for="nom">Nom:*</label></td>
                                <td>'.$_SESSION['userNom'].'</td>';
                            }
                        ?>
                        <td><label for="equipement">Quel type d'équipement avez-vous ?</label></td>
                        <td><select text="text" name="usergear">
                            <option value="Aérographe">Aérographe</option>
                            <option value="Pinceau">Pinceau</option>
                            <option value="Aérographe et Pinceau">Aérographe et<br> Pinceau</option>
                            <option value="Autre...">Autre...</option>
                        </select></td>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['userPrenom'])){
                                echo '<td><label for="nom">Prénom:*</label></td>
                                <td>?</td>';
                            }
                            else{
                                echo '<td><label for="nom">Prénom:*</label></td>
                                <td>'.$_SESSION['userPrenom'].'</td>';
                            }
                        ?>
                        <td><label for="">Quel type de peinture
                            <br>utilisez-vous?
                        </label></td>
                        <td><select type="text" name="userpaint">
                            <option value="Acrylique">Acrylique</option>
                            <option value="À Huile">À Huile</option>
                            <option value="Combinaison des deux">Combinaison des deux</option>
                        </select></td>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['userEmail'])){
                                echo '<td><label for="nom">Email:*</label></td>
                                <td>?</td>';
                            }
                            else{
                                echo '<td><label for="nom">Email:*</label></td>
                                <td>'.$_SESSION['userEmail'].'</td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <td><label for="level">Quel est votre niveau:*</label></td>
                        <td><select type="text" name="userlevel">
                            <option value="Débutant">Débutant</option>
                            <option value="Amateur">Amateur</option>
                            <option value="Professionnel">Professionnel</option>
                        </select></td>
                        <td><label for="">Depuis quand faites <br> vous des maquettes ?*</label></td>
                        <td><select type="text" name="modeltime">
                            <option value="moins d'un an">moins d'un an</option>
                            <option value="plus d'un an">plus d'un an</option>
                            <option value="5 ans">5 ans</option>
                            <option value="plus de 5 ans...">plus de 5 ans...</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="modelTypes">Quel type de maquette<br>avez-vous l'habitude de faire ?*</label></td>
                        <td><select type="text" name="modeltype">
                            <option value="Blindé">Blindé</option>
                            <option value="Aviation militaire">Aviation militaire</option>
                            <option value="Marine de guerre">Marine de guerre</option>
                            <option value="Véhicule civile">Véhicule civile</option>
                            <option value="Aviation civile">Aviation civile</option>
                            <option value="Marine civile">Marine civile</option>
                            <option value="Autre...">Autre...</option>
                        </select></td>
                    </tr>
                </table>
            <div>
            <fieldset>
                <legend>Posez votre question ici</legend>
                <textarea name="content" cols="100" rows="20"></textarea>
                <br>
                <button type="submit" name="send-submit">Envoyez</button>
            </fieldset>
            </div>
            </form>
        </div>
        <footer class="footer">
            <div>
                <a href="ContactUs.php">Nous contacter</a>
                <br><br>
                <a href="AboutUs.php">À propos</a>
            </div>
            <p class="footer_rights">
                Copyright © 2020 Crawford-Industries.
            </p>
        </footer>
    </body>
</html>