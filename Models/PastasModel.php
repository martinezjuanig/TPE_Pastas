<?php
 class PastasModel
 {
    private $db_connection;

    function __construct()
    {
        $this->db_connection= new PDO
        ('mysql:host=localhost;'.
        'dbname=pastas;charset=utf8',
        'root','');
    }

    function GetAllDb()
    {
        $sentence=$this->db_connection->prepare("SELECT pasta.*, harina.* FROM pasta, harina WHERE pasta.fk_harina=harina.id_harina");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    function getAllPastas()
    {
        $sentence = $this->db_connection->prepare(
        "select * from pasta");
        $sentence->execute();
        return $sentence-> fetchAll(PDO::FETCH_OBJ);
        
    }

    function addPasta(String $nombre, String $tipo)
    {
        $sentence = $this->db_connection->prepare(
        "INSERT INTO pasta (nombre, fk_harina) VALUES (?, ?)");
        $sentence->execute(array($nombre, $tipo));
    }


    function getOne($id_pasta)
    {
        $sentence = $this->db_connection->prepare("SELECT * FROM pasta, harina WHERE pasta.fk_harina=harina.id_harina and pasta.id_pasta=? ");
        $sentence->execute(array($id_pasta));
        return $sentence->fetch(PDO::FETCH_OBJ);

    }
    function editPasta($id_pasta, $nombrePasta)
    {
        $sentence = $this->db_connection->prepare("UPDATE pasta SET nombre= '$nombrePasta' WHERE id_pasta=?");
        $sentence->execute(array($id_pasta));
    }

    function delete($id_pasta)
    {
        $sentence = $this->db_connection->prepare("DELETE from pasta WHERE id_pasta = ?");
        $sentence->execute(array($id_pasta));

    }


    
}
 