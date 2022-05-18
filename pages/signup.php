<?php
    if(isset($_POST['signup-submit'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $numtel = $_POST['ntel'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $pays = $_POST['pays'];

        /*fonction filter_var() Filtre une variable avec un filtre spécifique, paramètres "value, filter" */

        /*fonction preg_match Effectue une recherche de correspondance avec une expression rationnelle standard, 
          paramètres "pattern, subjet" pattern=> Le masque à chercher, sous la forme d'une chaîne de caractères,
          subject => La chaîne d'entrée.*/

        if(empty($nom) || empty($prenom) || empty($sexe) || empty($numtel) || empty($email) || empty($mdp) || empty($pays)){
                header("Location: register.php?errorfiels&nom=".$nom."&email=".$email);
                exit();
        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/",$nom) && !preg_match("/^[a-zA-Z]*$/",$prenom)){
                header("Location: register.php?errorfiels&uid=".$nom."&email=".$email);
                exit();  
        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("Location: register.php?error=invalidmail&email=".$email);
                exit();
        }
        elseif(!preg_match("/^[a-zA-Z]*$/",$nom)){
                header("Location: register.php?error=invalid&nom=".$nom);
                exit();  
        }
        elseif(!preg_match("/^[a-zA-Z]*$/",$prenom)){
                header("Location: register.php?error=invalid&prenom=".$prenom);
                exit();  
        }
        elseif(!preg_match("/^[0-9]*$/",$numtel)){
                header("Location: register.php?error=invalid&numtel=".$numtel);
                exit();    
        }
        else{
                $sql = "SELECT email FROM api_client WHERE email=?";

                /*fonction mysqli_stmt_init Initialise une commande MySQL, paramètres "mysql" la variable connexion. */

                $stmt = mysqli_stmt_init($cnx);

                /*fonction mysqli_stmt_prepare Prépare une requête SQL pour l'exécution, paramètres "statement, query"*/

                if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: register.php?error=sqlerror");
                        exit();    
                }
                else{
                        /*fonction mysqli_stmt_bind_param Lie des variables à une requête MySQL */

                        mysqli_stmt_bind_param($stmt, "s", $email);

                        /*fonction mysqli_stmt_execute Exécute une requête préparée */

                        mysqli_stmt_execute($stmt);

                        /*fonction mysqli_stmt_store_result Stocke un jeu de résultats depuis une requête préparée */

                        mysqli_stmt_store_result($stmt);

                        /*fonction mysqli_stmt_num_rows Retourne le nombre de lignes d'un résultat MySQL */

                        $resultCheck = mysqli_stmt_num_rows($stmt);
                        if($resultCheck > 0){
                                header("Location: register.php?error=emailtakenl&email=".$email);
                                exit();     
                        }
                        else{
                                $sql = "INSERT INTO api_client (nom, prenom, sexe, numtel, email, mdp, pays) VALUES (?, ?, ?, ?, ?, ?, ?)";
                                $stmt = mysqli_stmt_init($cnx);
                                if(!mysqli_stmt_prepare($stmt,$sql)){
                                        header("Location: register.php?error=sqlerror1");
                                        exit();    
                                }
                                else{

                                        /*fonction password_hash  Crée une clé de hachage pour un mot de passe, PASSWORD_DEFAULT =>Utilisation 
                                        de l'algorithme CRYPT_BLOWFISH pour créer la clé de hachage */

                                        $hasdedmdp = password_hash($mdp, PASSWORD_DEFAULT);

                                        mysqli_stmt_bind_param($stmt, "sssssss", $nom, $prenom, $sexe, $numtel, $email, $hasdedmdp, $pays);
                                        mysqli_stmt_execute($stmt);
                                        header("Location: register.php?signup=success");
                                        exit();    
                                }       
                        }
                }
        }

        /*fonction mysqli_stmt_close Termine une requête préparée */

        mysqli_stmt_close($stmt);

        /*fonction mysqli_close Ferme une connexion */

        mysqli_close($cnx);
    }
    else{
        header("Location: register.php");
        exit();      
    }
