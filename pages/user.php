<?php
    require 'dbh.php';
    session_start();
?>

<!DOCTYPE html>
    <head>
        <title>Nous contacter</title>
        <link rel="stylesheet" href="contactus.css">
    </head>
    <nav class="nav">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<a href="logout.php">déconnexion</a>
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
                <div class="gauche">
                <form action="editAccount.php" method="post">
                    <h1>Detail du compte:</h1>
                    <table>
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
                                    echo '<td><label for="nom">Nom:</label></td>
                                    <td>'.$_SESSION['userNom'].'</td>';
                                }
                            ?> 
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['userPrenom'])){
                                    echo '<td><label for="prenom">Prenom:*</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="nom">Prenom:</label></td>
                                    <td>'.$_SESSION['userPrenom'].'</td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['userEmail'])){
                                    echo '<td><label for="Email">Email:*</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="Email">Email:</label></td>
                                    <td>'.$_SESSION['userEmail'].'</td>
                                    <td><input type="text" name="newEmail" placeholder="nouvelle adresse email"></td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['userEmail'])){
                                    echo '<td><label for="newMdp">Nouveau mot de passe:</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="newmdp">Nouveau mot de passe:</label></td>
                                    <td><input type="password" name="newMdp" placeholder="nouveau mot de passe"></td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['userNumtel'])){
                                    echo '<td><label for="newMdp">Numéro de téléphone:</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="numtel">Numéro de téléphone:</label></td>
                                    <td>'.$_SESSION['userNumtel'].'</td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                if(isset($_SESSION['userId'])){
                                    $id = $_SESSION['userId'];
                                    $sql = "SELECT * FROM post WHERE userid=$id";
                                    $result2 = mysqli_query($conn,$sql);
                                    $numpost = mysqli_num_rows($result2);
                                    echo '<td> vous avez : '.$numpost.' post</td>';
                                }
                                else{
                                    echo '<td> vous avez : 0 post</td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><button type="submit" name="edit-submit">modifier</button></td>
                        </tr>
                    </table>
                    </form>
                </div>
                <div class="millieu"><br></div>
                <div class="droite">
                        <table>
                        <form action="" method="post">
                            <tr>
                                <?php
                                    echo '<td><label for="newMdp">Numéro id de publication:</label></td>
                                    <td><input type="number" name ="input"></td>
                                    <td><button type="submit" name="postid-submit">entrer</button></td>';
                                ?>
                            </tr>
                        </form>
                        <?php
                            if(isset($_POST['postid-submit'])){
                                $inputId = $_POST['input'];
                                $userID = $_SESSION['userId'];
                                $sql2 = "SELECT * FROM post WHERE postid=$inputId AND userid=$userID";
                                $result3 = mysqli_query($conn,$sql2);
                                $resultCheck = mysqli_num_rows($result3);
                                if($resultCheck>0){
                                    $row = mysqli_fetch_assoc($result3);
                                        echo '<tr><td>Niveau: '.$row['userlevel'].'</td>
                                        <td>Modèle: '.$row['modeltype'].'</td>
                                        <td>Equipement: '.$row['usergear'].'</td>
                                        <td>Peinture: '.$row['userpaint'].'</td>
                                        <td>Temps: '.$row['modeltime'].'</td></tr>';
                                        echo'<tr><td>Publication: </td></tr>';
                                        echo'<tr><td colspan=5>'.$row['content'].'</td></tr>';
                                }else{
                                    echo '<tr><td>Aucun résultat!!</td></tr>';
                                    header("Location: user.php?error=noresults");
                                    exit();
                                }
                            }
                        ?>
                        </table>
                </div>
                <div class="clear"></div>
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