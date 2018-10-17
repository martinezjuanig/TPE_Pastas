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

    public function AdminShowAll($db_pastas,$harinas)
    {
        $smarty= new Smarty();
        $smarty->assign('db_pastas', $db_pastas);
        $smarty->assign('harinasTable', $harinas);
        $smarty->assign('basehref', $this->basehref);
        $smarty->display('templates/admin.tpl');


    }
    
    public function showOnePasta($pasta)
    {
        $smarty=new Smarty();
        $smarty->assign('pasta', $pasta);
        $smarty->assign('basehref', $this->basehref);
        $smarty->display('templates/editPasta.tpl');
    }

    public function showOneHarina($harina)
    {
        $smarty=new Smarty();
       
        $smarty->assign('harina', $harina);
        $smarty->assign('basehref', $this->basehref);
        $smarty->display('editHarina.tpl');
    }
    
}

