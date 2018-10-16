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
        

        header("Location: ../../admin");
    }

    public function showOne($id_pasta)
    {
        $model=new PastasModel();
        $pasta=$model->getOne($id_pasta);
        $view=new AdminView();
        $view->showOnePasta($pasta);

    }

    public function editPasta()
    {   
        $nombre=$_POST["nombre"];
        $id_pasta=$_POST["id_pasta"];
        $model=new PastasModel();
        $model->editPasta($nombre, $id_pasta);
        header("Location: admin");
    }

    
    
    
}
