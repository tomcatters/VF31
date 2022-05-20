<?php
header('Content-Type: application/json');
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Produit.class.php';
require '../classes/ProduitDB.class.php';

$cnx = Connexion::getInstance($dsn,$user,$password);

try {
    $produit = new ProduitDB($cnx);
    $prdt = $produit->updateProduit_dtls($_GET['newcnt'],$_GET['id_img'],$_GET['clm']);
}catch (PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}
