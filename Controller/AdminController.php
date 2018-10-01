<?php
require_once 'Models/AdminModel.php';
require_once 'Models/HarinasModel.php';
require_once 'Models/PastasModel.php';

require_once 'Views/adminView.php';

class AdminController
{
    public function AdminMenu()
    {
        
        $pastamodel=new PastasModel();
        $pastas=$pastamodel->getAllPastas();
        $adminmodel=new HarinasModel();
        $harinas=$adminmodel->getAllHarinas();
        $view=new AdminView();
        $view->AdminShowAll($harinas,$pastas);
    }

    
    
    
    
}
