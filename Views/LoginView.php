<?php

require_once "libs/Smarty.class.php";

class LoginView
{
    private $basehref;

    public function __construct()
    {
        $this->basehref = '//' . $_SERVER['SERVER_NAME']
            . dirname($_SERVER['PHP_SELF']) . '/'; 
    }
    
    public function showLoginForm()
    {
        $smarty=new Smarty();
        $smarty->assign('basehref', $this->basehref);
        $smarty->display('templates/loginForm.tpl');
    }
    
}

