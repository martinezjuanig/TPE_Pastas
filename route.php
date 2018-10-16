<?php
require_once 'Controller/PastasController.php';
require_once 'Controller/HarinasController.php';
require_once 'Controller/HomeController.php';
require_once 'Controller/LoginController.php';
require_once 'Controller/AdminController.php';


define('ACTION', 0);
define('ID', 1);

if (!isset($_GET['action']))
    $_GET['action'] = '';

$action = $_GET['action'];
$partesURL = explode("/", $action);


switch ($partesURL[ACTION]) {

    case 'pasta': 
        $controller=new PastasController();
        $controller->showAllpasta();
    break;

    case 'detalle': 
        $controller=new PastasController();
        $controller->ShowOne($partesURL[ID]);
    break;

    case 'harina': 
        $controller=new HarinasController();
        $controller->showAllHarinas();
    break;
    
    case 'loginForm':
        $controller=new LoginController();
        $controller->showLogin();        
    break;

    case 'logIn':
        $controller=new LoginController();
        $controller->logIn();        
    break;

    case 'logOut':
        $controller=new LoginController();
        $controller->logOut();        
    break;

    case 'admin':
        $controller=new AdminController();
        $controller->AdminMenu();        
        break;

    case 'savePasta':
        $controller=new AdminController();
        $controller->addPasta();        
        break;

    case 'saveHarina':
        $controller=new AdminController();
        $controller->addHarina();
        break;

    case 'delete':
        $controller=new AdminController();
        $controller->delete($partesURL[ID]);        
        break;

    case 'adminPasta':
        $controller=new AdminController();
        $controller->showOne($partesURL[ID]);        
        break;
        
   
    case 'editPasta':
        $controller=new AdminController();
        $controller->editPasta();        
        break;

    case 'home':   
        
    default:
        $controller = new PastasController();
        $controller->ShowAllDb(); 
        break;
    
}