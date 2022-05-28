<?php
class PostDB extends Post{
    private $_db;
    private $_array = array();

    public function __construct($cnx)
    {
        $this->_db = $cnx;
    }

    public function setPost($niv,$type,$gear,$paint,$time,$content,$id_client){
        try {
            $sql = "INSERT INTO api_post (niv_client,type_modele,gear_client,paint_client,time_modele,post_content,id_client) 
            VALUES (:niv,:type,:gear,:paint,:time,:content,:id_client)";
            $resultset = $this->_db->prepare($sql);
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

    public function getPost($id_post,$id_client){
        try {
            $sql = "SELECT * FROM api_post WHERE id_post= :id_post AND id_client= :id_client";
            $resultset = $this->_db->prepare($sql);
            $resultset->bindValue(':id_post', $id_post);
            $resultset->bindValue(':id_client', $id_client);
            $resultset->execute();
            $numpost = $resultset->rowCount();
            if($numpost>0){
                $retour = $resultset->fetch();
                if (!empty($retour)){
                    $_array[0] = new Post($retour);
                    return $_array;
                }else {
                    return null;
                }
            }else{
                return null;
            }
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function getPostLM($id_client){
        try {
            $sql = "SELECT * FROM api_post WHERE id_client= :id_client LIMIT 2";
            $resultset = $this->_db->prepare($sql);
            $resultset->bindValue(':id_client', $id_client);
            $resultset->execute();
            while ($retour = $resultset->fetch()){
                $_array[] = new Post($retour);
            }
            if (!empty($_array)){
                return $_array;
            }else {
                return null;
            }
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function getPostNLM($id_client,$commentNewCount){
        try {
            $sql = "SELECT * FROM api_post WHERE id_client= :id_client LIMIT $commentNewCount";
            $resultset = $this->_db->prepare($sql);
            $resultset->bindValue(':id_client', $id_client);
            $resultset->execute();
            while ($retour = $resultset->fetch()){
                $_array[] = new Post($retour);
            }
            if (!empty($_array)){
                return $_array;
            }else {
                return null;
            }
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
