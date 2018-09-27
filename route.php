<?php
require_once 'Controller/PastasController.php';
require_once 'Controller/HarinaController.php';
require_once 'Controller/HomeController.php';
require_once 'Controller/LoginController.php';

define('ACTION', 0);
define('ID', 1);

if (!isset($_GET['action']))
    $_GET['action'] = '';

$action = $_GET['action'];
$partesURL = explode("/", $action);


switch ($partesURL[ACTION]) {

    case 'pasta': 
        $controller=new PastasController();
        $controller->showAll();
    break;

    case 'harina': 
        $controller=new HarinasController();
        $controller->showAllHarinas();
    break;
    
    case 'save':
        $controller=new PastasController();
        $controller->addPasta();        
        break;

    case 'loginForm':
        $controller=new LoginController();
        $controller->showLogin();        
        break;

    case 'home':   
        
    default:
        $controller = new HomeController();
        $controller->showHome(); 
        break;
    
}