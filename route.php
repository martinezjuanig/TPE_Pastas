<?php
require_once 'Controller/PastasController.php';

define('ACTION', 0);
define('ID', 1);

if (!isset($_GET['action']))
    $_GET['action'] = '';

$action = $_GET['action'];
$partesURL = explode("/", $action);


switch ($partesURL[ACTION]) {
    case 'save':
        $controller=new pastasController();
        $controller->AdminShow();        
        break;

    case 'ver':    
    default:
        $controller=new pastasController();
        $controller->showAll();        
        break;
    
}