<?php

class HarinasModel {

    private $db_conection;
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
            "select * from harina");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);



    }
}