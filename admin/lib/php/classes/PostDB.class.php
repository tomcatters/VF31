<?php
class PostDB extends Post{
    private $_db;
    private $_array = array();

    public function __construct($cnx)
    {
        $this->_db = $cnx;
    }

    public function getPost($id_post,$id_client){
        try {
            $id_post = $_POST['id_post'];
            $id_client = $_SESSION['id_cli'];
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
}
