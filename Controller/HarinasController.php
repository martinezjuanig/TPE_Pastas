<?php
 require_once 'Models/HarinasModel.php';
 require_once 'Views/HarinaView.php';
 require_once 'Views/HomeView.php';



class HarinasController
{
    public function showAllHarinas()
    {   
        $harinamodel = new HarinasModel();
        $harinas = $harinamodel->getAllHarinas();
        $view = new HarinaView();
        $view->showAll($harinas);

    }
    

}
