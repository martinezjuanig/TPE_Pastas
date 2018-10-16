<?php

require_once 'Views/LoginView.php';
require_once 'Controller/Controller.php';



class LoginController extends Controller
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
                $_SESSION['USERNAME'] = $username;
                $_SESSION['ID'] = $user["id_usuario"];
                $_SESSION['LAST_ACTIVITY'] = time();
                header('location:' . ADMIN);
                die();
            } else {
                $view = new LoginView();
                $view->showLoginForm();
            }

            
        } 
        
    }

    public function logOut()
    {
        session_start();
        session_destroy();
        header('location:' . LOGINFORM);
        die();

    }
}
