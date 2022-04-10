<?php
    if(isset($_POST['login-submit'])){

        require 'dbh.php';

        $email = $_POST['logemail'];
        $mdp = $_POST['logmdp'];
        
        if(empty($email) || empty($mdp)){

            header("Location: index.php?error=emptyfields");
            exit();

        }
        else{
            $sql = "SELECT * FROM client WHERE email=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: index.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);

                /*fonction mysqli_stmt_get_result Récupère un jeu de résultats depuis une requête préparée */

                $result = mysqli_stmt_get_result($stmt);

                /*fonction mysqli_fetch_assoc Récupère une ligne de résultat sous forme de tableau associatif */

                if($row = mysqli_fetch_assoc($result)){

                    /*fonction password_verify Vérifie qu'un mot de passe correspond à un hachage, paramètres "password, hash"
                      password => Le mot de passe utilisateur, hash => Un hachage créé par la fonction password_hash().*/

                    $mdpCheck = password_verify($mdp, $row['mdp']);
                    if($mdpCheck == false){
                        header("Location: index.php?error=wrongmdp");
                        exit();
                    }
                    else if($mdpCheck == true){
                        session_start();
                        $_SESSION['userId'] = $row['id'];
                        $_SESSION['userNom'] = $row['nom'];
                        $_SESSION['userPrenom'] = $row['prenom'];
                        $_SESSION['userEmail'] = $row['email'];
                        $_SESSION['userNumtel'] = $row['numtel'];

                        header("Location: index.php?login=success");
                        exit();
                    }
                    else{
                        header("Location: index.php?error=wrongmdp");
                        exit();
                    }
                }
                else{
                    header("Location: index.php?error=nouser");
                    exit();
                }
            }
        }

    }
    else{
        header("Location: index.php");
        exit();
    }