<?php
    if (isset($_POST['send-submit'])){
        try {
            $niv = $_POST['level'];
            $type = $_POST['type'];
            $gear = $_POST['gear'];
            $paint = $_POST['paint'];
            $time = $_POST['time'];
            $content = $_POST['content'];
            $id_client = $_SESSION['id_cli'];

            $sql = "INSERT INTO api_post (niv_client,type_modele,gear_client,paint_client,time_modele,post_content,id_client) 
            VALUES (:niv,:type,:gear,:paint,:time,:content,:id_client)";
            $resultset = $cnx->prepare($sql);
            $resultset->bindValue(':niv', $niv);
            $resultset->bindValue(':type', $type);
            $resultset->bindValue(':gear', $gear);
            $resultset->bindValue(':paint', $paint);
            $resultset->bindValue(':time', $time);
            $resultset->bindValue(':content', $content);
            $resultset->bindValue(':id_client', $id_client);

            $resultset->execute();
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
?>

<h1 class="title">Demande d'informations complémentaires</h1>
    <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table class="inf_table">
                    <tr>
                        <th colspan="2">
                            <h3>Les rubriques obligatoires sont indiquées par *</h3>
                        </th>
                    </tr>
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
                                echo '<td><label for="nom">Nom:*</label></td>
                                <td>'.$_SESSION['nom'].'</td>';
                            }
                        ?>
                        <td><label for="equipement">Quel type d'équipement avez-vous ?</label></td>
                        <td><select text="text" name="gear">
                            <option value="Aérographe">Aérographe</option>
                            <option value="Pinceau">Pinceau</option>
                            <option value="Aérographe et Pinceau">Aérographe et<br> Pinceau</option>
                            <option value="Autre...">Autre...</option>
                        </select></td>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['prenom'])){
                                echo '<td><label for="nom">Prénom:*</label></td>
                                <td>?</td>';
                            }
                            else{
                                echo '<td><label for="nom">Prénom:*</label></td>
                                <td>'.$_SESSION['prenom'].'</td>';
                            }
                        ?>
                        <td><label for="">Quel type de peinture
                            <br>utilisez-vous?
                        </label></td>
                        <td><select type="text" name="paint">
                            <option value="Acrylique">Acrylique</option>
                            <option value="À Huile">À Huile</option>
                            <option value="Combinaison des deux">Combinaison des deux</option>
                        </select></td>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['email'])){
                                echo '<td><label for="nom">Email:*</label></td>
                                <td>?</td>';
                            }
                            else{
                                echo '<td><label for="nom">Email:*</label></td>
                                <td>'.$_SESSION['email'].'</td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <td><label for="level">Quel est votre niveau:*</label></td>
                        <td><select type="text" name="level">
                            <option value="Débutant">Débutant</option>
                            <option value="Amateur">Amateur</option>
                            <option value="Professionnel">Professionnel</option>
                        </select></td>
                        <td><label for="">Depuis quand faites <br> vous des maquettes ?*</label></td>
                        <td><select type="text" name="time">
                            <option value="moins d'un an">moins d'un an</option>
                            <option value="plus d'un an">plus d'un an</option>
                            <option value="5 ans">5 ans</option>
                            <option value="plus de 5 ans...">plus de 5 ans...</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="modelTypes">Quel type de maquette<br>avez-vous l'habitude de faire ?*</label></td>
                        <td><select type="text" name="type">
                            <option value="Blindé">Blindé</option>
                            <option value="Aviation militaire">Aviation militaire</option>
                            <option value="Marine de guerre">Marine de guerre</option>
                            <option value="Véhicule civile">Véhicule civile</option>
                            <option value="Aviation civile">Aviation civile</option>
                            <option value="Marine civile">Marine civile</option>
                            <option value="Autre...">Autre...</option>
                        </select></td>
                    </tr>
                </table>
            <div>
            <fieldset class="inf_fieldset">
                <legend>Posez votre question ici</legend>
                <textarea class="inf_textarea" name="content" cols="73" rows="15"></textarea>
                <br>
                <button type="submit" name="send-submit">Envoyez</button>
            </fieldset>
            </div>
            </form>
    </div>