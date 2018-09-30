<?php
require_once 'Models/AdminModel.php';
require_once 'libs/Smarty.class.php';


class AdminView
{
    private $basehref;

    public function __construct()
    {
        $this->basehref = '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/';
    }

    public function AdminShowAll($pastas)
    {
        $smarty= new Smarty();
        $smarty->assign('db_pastas', $pastas);
        $smarty->assign('basehref', $this->basehref);
        $smarty->display('templates/admin.tpl');


    }
    
}

