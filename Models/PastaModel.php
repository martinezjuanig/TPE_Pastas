<?php
 class PastaModel
 {
    private $db_connection;

    function __construct(){
        $this->db_connection= new PDO
        ('mysql:host=localhost;'.
        'dbname=pastas;charset=utf8',
        'root','');
    }

    function getAll()
    {
        $sentence = $this->db_connection->prepare(
        "select * from pasta");
        $sentence->execute();
        return $sentence-> fetchAll(PDO::FETCH_OBJ);
        
    }

    // function getPasta($id){
    //     $sentence = $this->$db_connection->prepare("select from * pastas" . "WHERE id_pasta=?");
    //     $sentence = execute(array($id));
    //     return $sentence-> fetch(PDO::FETCH_OBJ);

    // }

    // function savePastas(){
        



    // }
 }
 



?>