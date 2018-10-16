<?php
require_once 'Models/UserModel.php';
require_once 'libs/Smarty.class.php';


class AdminView
{
    private $basehref;

    public function __construct()
    {
        $this->basehref = '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/';
    }

    public function AdminShowAll($harinas,$pastas)
    {
        $smarty= new Smarty();
        $smarty->assign('db_harinas', $harinas);
        $smarty->assign('db_pastas', $pastas);
        $smarty->assign('basehref', $this->basehref);
        $smarty->display('templates/admin.tpl');


    }
    
    public function showOnePasta($pasta)
    {
        $smarty=new Smarty();
        $smarty->assign('pasta', $pasta);
        $smarty->assign('basehref', $this->basehref);
        $smarty->display('adminPasta.tpl');
    }
    
}

