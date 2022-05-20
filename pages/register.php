<?php

    if (isset($_POST['signup-submit'])) {
        extract($_POST,EXTR_OVERWRITE);

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $numtel = $_POST['ntel'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $pays = $_POST['pays'];

        $user = new UserDB($cnx);
        $usr = $user->setUser($nom,$prenom,$numtel,$email,$mdp,$pays);
        $usr = $user->getUser($email,$mdp);

        if ($usr!=null){
            print "<br> BIENVENUE ".$usr->id_client;
            $_SESSION['id_cli']=$usr[0]->id_client;
            unset($_SESSION['page']);
            print "<meta http-equiv=\"refresh\": Content=\"0;url=./index_.php?page=accueil.php\">";
        }else{
            print " NULL" ;
        }
    }
    if (isset($_POST['login-submit'])){
        extract($_POST,EXTR_OVERWRITE);

        $email = $_POST['logemail'];
        $mdp = $_POST['logmdp'];

        $user = new UserDB($cnx);
        $usr = $user->getUser($email,$mdp);

        if ($usr!=null){
            $_SESSION['id_cli']=$usr[0]->id_client;
            $_SESSION['nom']=$usr[0]->nom;
            $_SESSION['prenom']=$usr[0]->prenom;
            $_SESSION['numtel']=$usr[0]->numtel;
            $_SESSION['email']=$usr[0]->email;
            $_SESSION['mdp']=$usr[0]->mdp;
            unset($_SESSION['page']);
            if ($_SESSION['id_cli']==7){
                //print "<meta http-equiv=\"refresh\": Content=\"0;url=./indexAdmin_.php?page=accueil.php\">";
                print "<meta http-equiv=\"refresh\": Content=\"0;url=./admin/indexAdmin_.php?page=accueilAdmin.php\">";
            }else{
                print "<meta http-equiv=\"refresh\": Content=\"0;url=./index_.php?page=accueil.php\">";
            }
        }else{
            print " NULL" ;
        }
    }
?>

<div>
     <caption><h1 class="title">Information d'inscription</h1></caption>
    <?php
    if (!$cnx){
        echo "RIP";
    }else{
        echo "HOLLA";
        var_dump($cnx);
    }
    ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table class="reg_gauche">
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
            <div class="reg_millieu"><br></div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table class="reg_droite">
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
