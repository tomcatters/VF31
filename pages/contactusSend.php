<?php
    if(isset($_POST['contactus-Submit'])){
        require 'dbh.php';
        session_start();

        $nom = $_SESSION['userNom'];
        $prenom = $_SESSION['userPrenom'];
        $email = $_SESSION['userEmail'];
        $objet = $_POST['objet'];
        $message = $_POST['message'];
        $langue = $_POST['language'];

        $mailTo = "william.cr2000@gmail.com";
        $headers = "From: ".$email;
        $txt = "You have received an e-mail from ".$nom.".\n\n".$message;

        if(empty($nom) || empty($prenom) || empty($email) || empty($objet) || empty($message) || empty($mdp)){
            header("Location: contactus.php?errorfiels&nom");
            exit();
        }

        /*Fonction mail() envoie un mail, paramètres "to, subject, message"*/

        mail($mailTo, $objet, $txt, $headers);
        header("Location: index.php?mailsend");
    }