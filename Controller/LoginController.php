<?php

require_once 'Views/LoginView.php';


class LoginController
{
    public function showLogin()
    {   
        $view=new LoginView();
        $view->showLoginForm();
    }
}
