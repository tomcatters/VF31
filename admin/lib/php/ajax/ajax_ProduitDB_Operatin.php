<?php
echo 'hello';
header('Content-Type: application/json');
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Produit.class.php';
require '../classes/ProduitDB.class.php';
//require './admin/lib/php/classes/Connexion.class.php';

/*$dsn = 'pgsql:host=localhost;dbname=Blindex;port=5432';
$user = 'root';
$password = 'root';*/

$cnx = Connexion::getInstance($dsn,$user,$password);

echo $_GET['clm'];

try {
    $produit = new ProduitDB($cnx);
    $prdt = $produit->updateProduit_dtls($_GET['newcnt'],$_GET['id_img'],$_GET['clm']);
}catch (PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}
