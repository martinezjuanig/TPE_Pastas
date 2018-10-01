<?php
require_once 'Views/HomeView.php';
require_once 'Models/PastasModel.php';
require_once 'Controller/PastasController.php';




class HomeController
{
    public function ShowAllDb()
    {
        $pastasModel = new PastasModel();
        $pastas = $pastasModel->GetAllDb();
        $view = new ViewHome();
        $view->showHome($pastas);
    }
}