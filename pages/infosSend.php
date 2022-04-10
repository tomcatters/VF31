<?php

    /*$_POST => valeurs passées au script courant via le protocole HTTP et la méthode POST, variables non visible dans l'URL. */

    if(isset($_POST['send-submit'])){
        require 'dbh.php';
        session_start();

        $userid = $_SESSION['userId'];
        $userlevel = $_POST['userlevel'];
        $modeltype = $_POST['modeltype'];
        $usergear = $_POST['usergear'];
        $userpaint = $_POST['userpaint'];
        $modeltime = $_POST['modeltime'];
        $content = $_POST['content'];

        if(empty($userid) || empty($userlevel) || empty($modeltype) || empty($usergear) || empty($userpaint) || empty($modeltime) || empty($content)){
            header("Location: index.php?errorfiels&nom=".$nom."&email=".$email);
            exit();
        }
        else{
            $sql="INSERT INTO post(userid, userlevel, modeltype, usergear, userpaint, modeltime, content) VALUES (?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: infos.php?error=sqlerror1");
                exit();    
            }
            else{
                mysqli_stmt_bind_param($stmt, "issssss", $userid, $userlevel, $modeltype, $usergear, $userpaint, $modeltime, $content);
                mysqli_stmt_execute($stmt);
                header("Location: index.php?message=success");
                exit();  
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location: register.php");
        exit();      
    }