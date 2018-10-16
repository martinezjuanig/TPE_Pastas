<?php
require_once "Controller/Controller.php";

class SessionController extends Controller {

    public function __construct() {
        session_start();

        // verifica que este logueado
        if(isset($_SESSION['USERNAME'])){ // si esta logueado
            if (time() - $_SESSION['LAST_ACTIVITY'] >20) { // expiro el timeout
                    
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