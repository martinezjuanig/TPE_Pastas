<?php
 class PastaModel
 {
    private $db_connection;

    function __construct()
    {
        $this->db_connection= new PDO
        ('mysql:host=localhost;'.
        'dbname=pastas;charset=utf8',
        'root','');
    }

    function getAllPastas()
    {
        $sentence = $this->db_connection->prepare(
        "select * from pasta");
        $sentence->execute();
        return $sentence-> fetchAll(PDO::FETCH_OBJ);


        
    }

    function addPasta(String $nombre, String $fk_harina)
    {
        $sentence = $this->db_connection->prepare(
        "INSERT INTO pasta (nombre, fk_harina) VALUES (?, ?)");
        $sentence->execute(array($nombre, $fk_harina));
    }

    // function getOne($id){
    //     $sentence = $this->$db_connection->prepare("select from * pastas" . "WHERE id_pasta=?");
    //     $sentence = execute(array($id));
    //     return $sentence-> fetch(PDO::FETCH_OBJ);

    //  }

    // function savePastas(){
        



    // }
}
 



?>