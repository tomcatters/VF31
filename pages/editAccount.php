<?php
    if(isset($_POST['edit-submit'])){
        require 'dbh.php';
        session_start();

        $email = $_SESSION['userEmail'];
        $id = $_SESSION['userId'];
        $newemail = $_POST['newEmail'];
        $mdp = $_POST['newMdp'];

        if(empty($newemail) && empty($mdp)){
            header("Location: user.php?errorfiels&nom=".$nom."&email=".$email);
            exit();
        }
        else{
            if (filter_var($newemail,FILTER_VALIDATE_EMAIL) && !empty($mdp)){
                $sql = "SELECT * FROM client WHERE email=?";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: index.php?error=sqlerror");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "s", $newemail);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultCheck = mysqli_stmt_num_rows($stmt);
                        if($resultCheck > 0){
                                header("Location: user.php?error=emailtakenl&email=".$email);
                                exit();     
                        }
                        else{
                            $sql = "UPDATE client SET email=?, mdp=? WHERE id=?";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                header("Location: user.php?error=sqlerror1");
                                exit();    
                        }
                            else{
                                $hasdedmdp = password_hash($mdp, PASSWORD_DEFAULT);

                                mysqli_stmt_bind_param($stmt, "ssi", $newemail, $hasdedmdp, $id);
                                mysqli_stmt_execute($stmt);
                                session_start();
                                session_unset();
                                session_destroy();
                                header("Location: user.php?signup=success1");
                                exit();    
                            } 
                        }
                }
            }
            elseif(filter_var($newemail,FILTER_VALIDATE_EMAIL) && empty($mdp)){
                $sql = "SELECT * FROM client WHERE email=?";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: index.php?error=sqlerror");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "s", $newemail);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultCheck = mysqli_stmt_num_rows($stmt);
                        if($resultCheck > 0){
                                header("Location: user.php?error=emailtakenl&email=".$email);
                                exit();     
                        }
                        else{
                            $sql = "UPDATE client SET email=? WHERE id=?";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                header("Location: user.php?error=sqlerror1");
                                exit();    
                        }
                            else{

                                mysqli_stmt_bind_param($stmt, "si", $newemail, $id);
                                mysqli_stmt_execute($stmt);
                                session_start();
                                session_unset();
                                session_destroy();
                                header("Location: index.php?signup=success2");
                                exit();    
                            } 
                        }
                }
            }
            elseif(empty($newemail) && !empty($mdp)){
                $sql = "SELECT * FROM client WHERE email=?";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: index.php?error=sqlerror");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "s", $newemail);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultCheck = mysqli_stmt_num_rows($stmt);
                        if($resultCheck > 0){
                                header("Location: user.php?error=emailtakenl&email=".$email);
                                exit();     
                        }
                        else{
                            $sql = "UPDATE client SET mdp=? WHERE id=?";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                header("Location: user.php?error=sqlerror1");
                                exit();    
                            }
                            else{
                                $hasdedmdp = password_hash($mdp, PASSWORD_DEFAULT);

                                mysqli_stmt_bind_param($stmt, "si", $hasdedmdp, $id);
                                mysqli_stmt_execute($stmt);
                                session_start();
                                session_unset();
                                session_destroy();
                                header("Location: index.php?signup=success3");
                                exit();    
                            } 
                        }
                }
            }
            else{
                header("Location: user.php?error=else");
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location: user.php");
        exit();      
    }