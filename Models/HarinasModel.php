<?php

class HarinasModel {

    private $db_connection;
    function __construct()
    {
        $this->db_connection = new PDO
        ('mysql:host=localhost;' .
                'dbname=pastas;charset=utf8',
            'root','');
    }

    function getAllHarinas()
    {
        $sentence = $this->db_connection->prepare(
            "SELECT * FROM harina");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    function addharina(String $tipo)
    {
        $sentence = $this->db_connection->prepare("INSERT INTO harina(tipo) VALUE (?)");
        $sentence->execute(array($tipo));
    }

    function getOne($id_harina)
    {
        $sentence = $this->db_connection->prepare("SELECT * FROM harina WHERE id_harina=? ");
        $sentence->execute(array($id_harina));
        return $sentence->fetch(PDO::FETCH_OBJ);

    }

    function editHarina(String $tipo, $id_harina)
    {
        $sentence = $this->db_connection->prepare("UPDATE harina SET tipo= ? WHERE id_harina=?");
        $sentence->execute(array($tipo, $id_harina));
    }
    
}