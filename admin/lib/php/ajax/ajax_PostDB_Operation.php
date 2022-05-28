<?php
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Post.class.php';
require '../classes/PostDB.class.php';

$cnx = Connexion::getInstance($dsn,$user,$password);

try {
    $commentNewCount = $_POST['commentNewCount'];
    $id_cli = $_POST['idcli'];

    $post = new PostDB($cnx);
    $pst = $post->getPostNLM($id_cli,$commentNewCount);

    $num = count($pst);
    for ($i = 0; $i < $num; $i++){
        echo '<tr><td>Niveau: '.$pst[$i]->niv_client.'</td>
                                                <td>Modèle: '.$pst[$i]->type_modele.'</td>
                                                <td>Equipement: '.$pst[$i]->gear_client.'</td>
                                                <td>Peinture: '.$pst[$i]->paint_client.'</td>
                                                <td>Temps: '.$pst[$i]->time_modele.'</td></tr>';
        echo'<tr><td>Publication: </td></tr>';
        echo '<tr><td colspan=5><textarea readonly cols="65" rows="12" placeholder="'.$pst[$i]->post_content.'"></textarea></td></tr>';
    }

}catch (PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}

