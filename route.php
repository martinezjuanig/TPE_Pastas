<?php
require_once 'Controller/PastasController.php';

define('ACTION', 0);
define('ID', 1);

$action = $_GET['action'];
$partesURL = explode("/", $action);


switch ($partesURL [ACTION]) {
    case 'pastas':
        $controller = new pastasController();
        $controller->showAll();        
        break;
    default:
        $controller = new pastasController();
        $controller -> showAll();        
        break;
    
}

?>