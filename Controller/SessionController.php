<?php
define('LOGINFORM', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/loginForm');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/logOut');
define('ADMIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/admin');

class SessionController  {

    public function __construct() {
        session_start();

        if(isset($_SESSION['USERNAME'])){ 
            if (time() - $_SESSION['LAST_ACTIVITY'] >20) { 
                    
                header('Location:' . LOGOUT);
                die();
            }

            $_SESSION['LAST_ACTIVITY'] = time();
        }
        else {
        
            header('Location:' . ADMIN);
            
            die();
        }
    }
}