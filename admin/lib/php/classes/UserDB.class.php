<?php
class UserDB extends user{

    private $_db;
    private $_array = array();

    public function __construct($cnx)
    {
        $this->host = $_SESSION['id_cli'];
        $this->_db = $cnx;
    }

    function updateUser($id_client,$email,$mdp){

    }

    public function setUser($nom,$prenom,$numtel,$email,$mdp,$pays){
        try {
            $sql = "INSERT INTO api_client (nom, prenom, numtel, pays, email, mdp) values (:nom,:prenom,:numtel,:pays,:email,:mdp)";
            $resultset = $this->_db->prepare($sql);
            $resultset->bindValue(':nom', $nom);
            $resultset->bindValue(':prenom', $prenom);
            $resultset->bindValue(':numtel', $numtel);
            $resultset->bindValue(':pays', $pays);
            $resultset->bindValue(':email', $email);
            $resultset->bindValue(':mdp', $mdp);

            $resultset->execute();
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function getUser($email, $mdp){
        try {
            $sql = "SELECT * FROM api_client WHERE email = :email AND mdp = :mdp";
            $resultset = $this->_db->prepare($sql);
            $resultset->bindValue(':email', $email);
            $resultset->bindValue(':mdp', $mdp);

            $resultset->execute();
            $retour = $resultset->fetch();

            if (!empty($retour)) {
                $_array[0] = new User($retour);
                return $_array;
            } else {
                return null;
            }
            /*$sql = "SELECT * FROM api_client WHERE email= 'william.cr2000@yahoo.fr' AND mdp= '123'";
            $result = $cnx->query($sql);
            $user = $result->fetch();*/
        }catch (PDOException $e){
            print "Erreur : " . $e->getMessage();
        }
    }

    public function editUser($email,$mdp){
        try {
            if ($email!=null && $mdp!=null) {
                $sql = "UPDATE api_client SET email = :email, mdp = :mdp WHERE id_client = :id_client";
                $resultset = $this->_db->prepare($sql);
                $resultset->bindValue(':email', $email);
                $resultset->bindValue(':mdp', $mdp);
                $resultset->bindValue(':id_client', $this->host);

                $resultset->execute();
            }/*if ($email!=null && $mdp==null){
                $sql = "UPDATE api_client SET email = :email WHERE id_client = :id_client";
                $resultset = $this->_db->prepare($sql);
                $resultset->bindValue(':email', $email);
                $resultset->bindValue(':id_client', $this->host);

                $resultset->execute();
            }if ($email==null && $mdp!=null){
                $sql = "UPDATE api_client SET mdp = :mdp WHERE id_client = :id_client";
                $resultset = $this->_db->prepare($sql);
                $resultset->bindValue(':mdp', $mdp);
                $resultset->bindValue(':id_client', $this->host);

                $resultset->execute();
            }*/
        }catch (PDOException $e){
            print "Erreur : " . $e->getMessage();
        }
    }
}
