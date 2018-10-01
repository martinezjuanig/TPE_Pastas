<?php
require_once 'Models/PastasModel.php'; 
require_once "libs/Smarty.class.php";   
class ViewHome{

    private $basehref;

    public function __construct(){
        $this->basehref = '//' . $_SERVER['SERVER_NAME']
            . dirname($_SERVER['PHP_SELF']) . '/'; 

       

    }
    public function showHome($pastas){
        $smarty = new Smarty();
        $smarty->assign('db_pastas', $pastas);
        $smarty->assign('basehref', $this->basehref); 
        $smarty->display('templates/home.tpl');
    }
}