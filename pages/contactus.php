<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nous contacter</title>
        <link rel="stylesheet" href="contactus.css">
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
        <form action="contactusSend.php" method="post">
            <div class="gauche">
                <h1>Nous contacter:</h1>
                <table>
                    <tr>
                        <th colspan="2">Les rubriques obligatoires sont indiquées par *</th>
                    </tr>
                    <tr>
                        <td><br></td>
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
                            if(!isset($_SESSION['userEmail'])){
                                echo '<td><label for="Email">Email:*</label></td>
                                <td><input type="text"></td>';
                            }
                            else{
                                echo '<td><label for="Email">Email:</label></td>
                                <td>'.$_SESSION['userEmail'].'</td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <td><label for="subject">Objet:*</label></td>
                        <td><input type="text" name = "objet"></td>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['userNom'])){
                                echo '<td><label for="nom">Nom:*</label></td>
                                <td><input type="text"></td>';
                            }
                            else{
                                echo '<td><label for="nom">Nom:</label></td>
                                <td>'.$_SESSION['userNom'].'</td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['userPrenom'])){
                                echo '<td><label for="prenom">Prenom:*</label></td>
                                <td><input type="text"></td>';
                            }
                            else{
                                echo '<td><label for="nom">Prenom:</label></td>
                                <td>'.$_SESSION['userPrenom'].'</td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <td><label for="language">Langue/Language:*</label></td>
                        <td><select type = "text" name="language">
                            <option value="Français">Français</option>
                            <option value="English">English</option>
                        </select></td>
                    </tr>
                </table>
            </div>
            <div class="millieu"><br></div>
            <div class="droite">
                <fieldset>
                    <legend>Posez votre question ici</legend>
                    <textarea name="message" id="" cols="80" rows="16"></textarea>
                    <br>
                    <button type="submit" name="contactus-Submit">Envoyez</button>
                </fieldset>
            </div>
        </form>
        <div class="clear"></div>
        <footer class="footer">
            <div>
                <br>
                <a href="AboutUs.php">À propos</a>
            </div>
            <p class="footer_rights">
                Copyright © 2017-2020 Crawford-Industries.
            </p>
        <footer>
    </body>
</html>