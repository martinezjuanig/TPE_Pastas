<?php
class UserModel
{
    private $db_connection;

    public function __construct()
    {
        $this->db_connection=new PDO('mysql:host=localhost;'. 'dbname=pastas;charset=utf8', 'root', '');
        
    }


    public function getUser($username){
        $sentence = $this->db_connection->prepare("SELECT * FROM usuario WHERE username=?");
        $sentence->execute(array($username));
        return $sentence->fetch(PDO::FETCH_ASSOC);
    }
     
       

}