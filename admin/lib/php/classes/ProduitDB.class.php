<?php
class ProduitDB extends Produit{

    private $_db;
    private $_array1 = array();
    private $_array2 = array();

    public function __construct($cnx)
    {
        $this->_db = $cnx;
    }

    public function getProduit($id_prod){
        try {
            $sql = "select * from api_produits where id_produit= :id_prod";
            $resultset = $this->_db->prepare($sql);
            $resultset->bindValue(':id_prod', $id_prod);

            $resultset->execute();

            $retour = $resultset->fetch();
            if (!empty($retour)) {
                $_array1[0] = new User($retour);
                return $_array1;
            } else {
                return null;
            }

            /*while ($data = $resultset->fetch()){
                $_array1[]=new Produit($data);
            }
            if (!empty($_array1)) return $_array1;
            else return null;*/
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function getProduit_dtls($id_prod){
        try {
            $sql = "select * from api_produit_details where id_produit= :id_prod order by id_img";
            $resultset = $this->_db->prepare($sql);
            $resultset->bindValue(':id_prod', $id_prod);

            $resultset->execute();

            while ($data = $resultset->fetch()){
                $_array2[]=new Produit($data);
            }
            if (!empty($_array2)) return $_array2;
            else return null;
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function updateProduit_dtls($content,$id_img,$clm){
        try {
            if ($clm=="img_desc"){
                $sql = "UPDATE api_produit_details SET img_desc = :img_desc WHERE id_img = :id_img";
                $resultset = $this->_db->prepare($sql);
                $resultset->bindValue(':img_desc', $content);
                $resultset->bindValue(':id_img', $id_img);

                $resultset->execute();
            }if ($clm=="img_titre"){
                $sql = "UPDATE api_produit_details SET img_titre = :img_titre WHERE id_img = :id_img";
                $resultset = $this->_db->prepare($sql);
                $resultset->bindValue(':img_titre', $content);
                $resultset->bindValue(':id_img', $id_img);

                $resultset->execute();
            }
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
