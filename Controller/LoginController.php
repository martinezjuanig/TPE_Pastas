<?php

require_once 'Views/LoginView.php';


class LoginController
{
    public function showLogin()
    {   
        $view=new LoginView();
        $view->showLoginForm();
    }

    public function logIn()
    {
        $username= $_POST["username"];
        $password= $_POST["password"];

        if ((!empty($username)) && (!empty($password))) {
            $model= new UserModel();
            $user=$model->getUser($username);
            if (!empty($user) && password_verify($password, $user['password'])) {
                session_start();
                header("location: admin");
                die();
            }

            
        } else {
            $view=new LoginView();
            $view->showLoginForm();
        }
        
    }

    public function logOut()
    {
        session_start();
        session_destroy();
        header("location: loginForm");
        die();

    }
}
