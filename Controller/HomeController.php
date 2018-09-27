<?php
require_once 'Views/HomeView.php';
require_once 'Models/HarinaModel.php';
require_once 'Views/HarinaView.php';
require_once 'Models/PastaModel.php';
require_once 'Views/PastaView.php';
require_once 'Controller/PastasController.php';
require_once 'Controller/HarinaController.php';




class HomeController
{
    public function showHome()
    {
        $view = new ViewHome();
        $view->showHome();
        $pastasModel=new PastaModel();
        $pastas=$pastasModel->getAllPastas();
        $pastaview=new PastaView();
        $pastaview->showAll($pastas);
        $harinasModel=new HarinasModel();
        $harinas=$harinasModel->getAllHarinas();
        $harinaview=new HarinaView();
        $harinaview->ShowAll($harinas);
    }
}