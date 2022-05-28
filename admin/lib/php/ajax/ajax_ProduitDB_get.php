<?php
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Produit.class.php';
require '../classes/ProduitDB.class.php';

$cnx = Connexion::getInstance($dsn,$user,$password);

echo $_POST['id_produit'];

try {
    $_POST['id_produit'];

    $produit = new ProduitDB($cnx);
    //$prdt = $produit->getProduit(1);
    $prdt_dtls = $produit->getProduit_dtls(1);
    $num = count($prdt_dtls);

    for ($i = 0; $i < $num; $i++){
        echo '<tr><td><span contenteditable="true" name="'.$prdt_dtls[$i]->id_img.'" class="ecart" id="img_titre">'.$prdt_dtls[$i]->img_titre.'</span></td>
                <td><span contenteditable="true" name="'.$prdt_dtls[$i]->id_img.'" class="ecart" id="img_desc">'.$prdt_dtls[$i]->img_desc.'</span></td></tr>
        ';
    }
}catch (PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="./lib/js/fonctionJQuery.js"></script>
    </head>
</html>
