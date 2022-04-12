<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../admin/lib/css/register.css">
        <title>Formulaire d'inscription</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <form action="signup.php" method="post">
                <table class="gauche">
                    <caption><h1 class="title">Information d'inscription</h1></caption>
                    <tr>
                        <th colspan="2"><h3>Information personnelle:</h3></th>
                    </tr>
                    <tr>
                        <td>
                            <label for="Homme">Homme</label>
                            <input type="radio" name="sexe" value="homme" id="homme">
                            <label for="Femme">Femme</label>
                            <input type="radio" name="sexe" value="femme" id="femme">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nom">Nom:*</label></td>
                        <td><input type="text" name = "nom"></td>
                    </tr>
                    <tr>
                        <td><label for="nom">Prénom:*</label></td>
                        <td><input type="text" name = "prenom"></td>
                    </tr>
                    <tr>
                        <td><label for="phoneNum">Numéro de téléphone:</label></td>
                        <td><input type="text" name = "ntel"></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="country">Pays:*</label></td>
                        <td><select type="text" name = "pays">
                            <option value="Belgique">Belgique</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Pays-Bas">Pays-Bas</option>
                            <option value="France">France</option>
                            <option value="Royaume-Uni">Royaume-Uni</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th colspan="2"><h3>Information de connexion:</h3></th>
                    </tr>
                    <tr>
                        <td><label for="Email">Email:*</label></td>
                        <td><input type="text" name = "email"></td>
                    </tr>
                    <tr>
                        <td><label for="mdp">Mot de passe:*</label></td>
                        <td><input type="password" name = "mdp"></td>
                    </tr>
                    <td>
                        <td><br></td>
                    </td>
                    <tr>
                        <td><button type="submit" name="signup-submit">Crée votre compte</button></td>
                    </tr>
                </table>
            </form>
            <div class="millieu"><br></div>
            <form action="login.php" method="post">
                <table class="droite">
                    <tr>
                        <th colspan="2"><h2>Se connecter:</h2></th>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="nom">Email:</label></td>
                        <td><input type="text" name = 'logemail'></td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Mot de passe:</label></td>
                        <td><input type="password" name = 'logmdp'></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="login-submit">Connexion</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="clear"></div>
    </body>
</html>