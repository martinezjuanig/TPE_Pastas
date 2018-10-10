<?php
require_once 'Models/UserModel.php';
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

    public function addPasta()
    {
        if (isset($_POST["pasta"])) {
            $pasta = $_POST["pasta"];
            $harina = $_POST["harinas"];
            $model = new PastasModel();
            $model->addPasta($pasta, $harina);
        }

        header("Location: admin");

    }

    public function addHarina()
    {
        if (isset($_POST["harina"])){
            $harinaTipo=$_POST["harina"];
            $model=new HarinasModel();
            $model->addHarina($harinaTipo);
        }
       
        header("Location: admin");
    }

    public function delete($id_pasta)
    {
        $adminmodel = new PastasModel();
        $pastas = $adminmodel->delete($id_pasta);
        $view = new AdminView();
        $view->AdminShowAll($harinas, $pastas);

        header("Location: ../../admin");
    }
    
    
    
    
}
