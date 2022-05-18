 <div class="cts_gauche">
                <form action="editAccount.php" method="post">
                    <h1>Detail du compte:</h1>
                    <table>
                        <?php
                            if(!isset($_SESSION['id_cli'])){
                                echo'<tr><td>veuillez vous connecter ! </td>
                                <td><a href="?page=register.php">se connecter</a></td></tr>';
                            }
                        ?>
                        <tr>
                        <td><br></td>
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['nom'])){
                                    echo '<td><label for="nom">Nom:*</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="nom">Nom:</label></td>
                                    <td>'.$_SESSION['nom'].'</td>';
                                }
                            ?> 
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['prenom'])){
                                    echo '<td><label for="prenom">Prenom:*</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="prenom">Prenom:</label></td>
                                    <td>'.$_SESSION['prenom'].'</td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['email'])){
                                    echo '<td><label for="Email">Email:*</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="Email">Email:</label></td>
                                    <td>'.$_SESSION['email'].'</td>
                                    <td><input type="text" name="newEmail" placeholder="nouvelle adresse email"></td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                if(!isset($_SESSION['email'])){
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
                                if(!isset($_SESSION['numtel'])){
                                    echo '<td><label for="newMdp">Numéro de téléphone:</label></td>
                                    <td>?</td>';
                                }
                                else{
                                    echo '<td><label for="numtel">Numéro de téléphone:</label></td>
                                    <td>'.$_SESSION['numtel'].'</td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                if(isset($_SESSION['id_cli'])){
                                    $id_client = $_SESSION['id_cli'];
                                    $sql = "SELECT * FROM api_post WHERE id_client = :id_client";
                                    $resultset = $cnx->prepare($sql);
                                    $resultset->bindValue(':id_client', $id_client);
                                    $resultset->execute();
                                    $numpost = $resultset->rowCount();
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
                <div class="cts_millieu"><br></div>
                <div class="cts_droite">
                        <table>
                        <form action="" method="post">
                            <tr>
                                <?php
                                    echo '<td><label for="newMdp">Numéro id de publication:</label></td>
                                    <td><input type="number" name ="id_post"></td>
                                    <td><button type="submit" name="postid-submit">entrer</button></td>';
                                ?>
                            </tr>
                        </form>
                        <?php
                            if(isset($_POST['postid-submit'])){
                                /*try {
                                    $id_post = $_POST['id_post'];
                                    $userID = $_SESSION['id_cli'];
                                    $sql = "SELECT * FROM api_post WHERE id_post= :id_post AND id_client= :id_client";
                                    $resultset = $cnx->prepare($sql);
                                    $resultset->bindValue(':id_post', $id_post);
                                    $resultset->bindValue(':id_client', $id_client);
                                    $resultset->execute();
                                    $numpost = $resultset->rowCount();
                                    if($numpost>0){
                                        $row = $resultset->fetch();
                                        echo '<tr><td>Niveau: '.$row['niv_client'].'</td>
                                        <td>Modèle: '.$row['type_modele'].'</td>
                                        <td>Equipement: '.$row['gear_client'].'</td>
                                        <td>Peinture: '.$row['paint_client'].'</td>
                                        <td>Temps: '.$row['time_modele'].'</td></tr>';
                                        echo'<tr><td>Publication: </td></tr>';
                                        echo'<tr><td colspan=5>'.$row['post_content'].'</td></tr>';
                                    }else{
                                        echo '<tr><td>Aucun résultat!!</td></tr>';
                                        header("Location: user.php?error=noresults");
                                        exit();
                                    }
                                }catch (PDOException $e){
                                    echo $sql . "<br>" . $e->getMessage();
                                }*/
                                $id_post = $_POST['id_post'];
                                $userID = $_SESSION['id_cli'];

                                $post = new PostDB($cnx);
                                $pst = $post->getPost($id_post,$id_client);

                                if ($pst!=null){
                                    echo '<tr><td>Niveau: '.$pst[0]->niv_client.'</td>
                                        <td>Modèle: '.$pst[0]->type_modele.'</td>
                                        <td>Equipement: '.$pst[0]->gear_client.'</td>
                                        <td>Peinture: '.$pst[0]->paint_client.'</td>
                                        <td>Temps: '.$pst[0]->time_modele.'</td></tr>';
                                    echo'<tr><td>Publication: </td></tr>';
                                    //echo'<tr><td colspan=5>'.$pst[0]->post_content.'</td></tr>';
                                    echo '<tr><td colspan=5><textarea readonly cols="65" rows="12" placeholder="'.$pst[0]->post_content.'"></textarea></td></tr>';
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