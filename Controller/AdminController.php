<?php
require_once 'Models/UserModel.php';
require_once 'Models/HarinasModel.php';
require_once 'Models/PastasModel.php';
require_once 'Views/adminView.php';
require_once 'Controller/SessionController.php';

class AdminController extends SessionController
{
    public function AdminMenu()
    {
        $model=new PastasModel();
        $db_pastas=$model->GetAllDb();
        $adminmodel=new HarinasModel();
        $harinas=$adminmodel->getAllHarinas();
        $view=new AdminView();
        $view->AdminShowAll($db_pastas,$harinas);
    }

    public function addPasta()
    {
        if (isset($_POST["pasta"]) && (isset($_POST["harina"]))) {
            $pasta=$_POST["pasta"];
            $tipo=$_POST["harina"];
            $model = new PastasModel();
            $model->addPasta($pasta, $tipo, $_FILES['adjunto']['tmp_name']);
        }

        header('Location:' . ADMIN);

    }

    public function addHarina()
    {
        if (isset($_POST["harina"])){
            $harinaTipo=$_POST["harina"];
            $model=new HarinasModel();
            $model->addHarina($harinaTipo);
        }
       
        header('Location:' . ADMIN);
    }

    public function delete($id_pasta)
    {
        $adminmodel = new PastasModel();
        $pastas = $adminmodel->delete($id_pasta);
        

        header('Location:' . ADMIN);

    }

    public function showOnePasta($id_pasta)
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

        header('Location:' . ADMIN);

    }

    public function showOneHarina($id_harina)
    {
        $model = new HarinasModel();
        $harina = $model->getOne($id_harina);
        $harinasmodel=new HarinasModel();
        $harinas = $harinasmodel->getAllHarinas();
        $view = new AdminView();
        $view->showOneHarina($harina);

    }

    public function editHarina()
    {
        $tipo=$_POST["tipo"];
        $id_harina=$_POST["id_harina"];
        $model=new HarinasModel();
        $model->editHarina($tipo, $id_harina);

        header('Location:' . ADMIN);
    }

    
    
    
}
