<?php
class AdminModel
{
    private $db_connection;

    public function __construct()
    {
        $this->db_connection=new PDO('mysql:host=localhost;'. 'dbname=pastas;charset=utf8', 'root', '');
        
    }
    
     function savePasta($name, $fk_harina)
    {
        $sentence = $this->db_connection->prepare(
        "INSERT INTO pasta(nombre, tipo) VALUE(?,?)");
        $sentencia->execute(array($name, $fk_harina));
    }
        
    function saveHarina($type)
    {
        $sentence = $this->db_connection->prepare("INSERT INTO harina(tipo) VALUE(?)");
        $sentencia->execute(array($type));
    }

    function editPasta($id_pasta, $nombrePasta)
    {
        $sentence=$this->db_connection->prepare("UPDATE pasta SET nombre= '$nombrePasta' WHERE id_pasta=?");
        $sentence->execute(array($id_pasta));
    }

    function delete($id_pasta)
    {
        $sentence=$this->db_connection->prepare("DELETE from pasta WHERE id_pasta = ?");
        $sentence->execute(array($id_pasta));

    }


}