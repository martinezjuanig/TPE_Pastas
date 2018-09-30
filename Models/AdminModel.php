<?php
class AdminModel
{
    private $db_connection;

    public function __construct()
    {
        $this->db_connection=new PDO('mysql:host=localhost;'. 'dbname=pastas;charset=utf8', 'root', '');
        
    }
    function getAll()
    {
        $sentence=$this->db_connection->prepare("SELECT pasta.nombre, harina.tipo FROM pasta, harina where pasta.fk_harina = harina.id_harina");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }
    
    function delete($id_pasta)
    {
        $sentence=$this->db_connection->prepare("DELETE from pasta WHERE id_pasta = ?");
        $sentence->execute(array($id_pasta));

    }
    function savePasta($name)
    {
        $sentence = $this->db_connection->prepare(
            "INSERT INTO pasta(nombre) VALUE(?)");
        $sentencia->execute(array($name));
    }
    function saveHarina($type)
    {
        $sentence = $this->db_connection->prepare(
            "INSERT INTO harina(tipo) VALUE(?)");
        $sentencia->execute(array($type));
    }
}