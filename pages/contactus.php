<div>
        <form action="contactusSend.php" method="post">
            <div class="cts_gauche">
                <h1>Nous contacter:</h1>
                <table>
                    <tr>
                        <th colspan="2">Les rubriques obligatoires sont indiquées par *</th>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
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
                            if(!isset($_SESSION['userEmail'])){
                                echo '<td><label for="Email">Email:*</label></td>
                                <td><input type="text"></td>';
                            }
                            else{
                                echo '<td><label for="Email">Email:</label></td>
                                <td>'.$_SESSION['userEmail'].'</td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <td><label for="subject">Objet:*</label></td>
                        <td><input type="text" name = "objet"></td>
                    </tr>
                    <tr>
                        <?php
                            if(!isset($_SESSION['userNom'])){
                                echo '<td><label for="nom">Nom:*</label></td>
                                <td><input type="text"></td>';
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
                                <td><input type="text"></td>';
                            }
                            else{
                                echo '<td><label for="nom">Prenom:</label></td>
                                <td>'.$_SESSION['userPrenom'].'</td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <td><label for="language">Langue/Language:*</label></td>
                        <td><select type = "text" name="language">
                            <option value="Français">Français</option>
                            <option value="English">English</option>
                        </select></td>
                    </tr>
                </table>
            </div>
            <div class="cts_millieu"><br></div>
            <div class="cts_droite">
                <fieldset>
                    <legend>Posez votre question ici</legend>
                    <textarea name="message" id="" cols="80" rows="16"></textarea>
                    <br>
                    <button type="submit" name="contactus-Submit">Envoyez</button>
                </fieldset>
            </div>
        </form>
        <div class="clear"></div>
</div>
