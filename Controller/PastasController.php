<?php
require_once 'Models/PastasModel.php';
require_once 'Models/AdminModel.php';
require_once 'Views/PastaView.php';
require_once 'Views/HomeView.php';



class PastasController {
    
    public function ShowAllDb()
    {
        $pastasModel = new PastasModel();
        $pastas = $pastasModel->GetAllDb();
        $view = new ViewHome();
        $view->showHome($pastas);
    }


    public function showAllPasta (){
        $pastamodel = new PastasModel();
        $pastas = $pastamodel->getAllPastas();
        $view = new PastaView();
        $view->showAll($pastas);

    }
    
    public function addPasta(){
        if (isset($_POST["pasta"])) {
            $pasta=$_POST["pasta"];
            $harina=$_POST["harina"];
            $model=new PastasModel();
            $model->addPasta($pasta, $harina);
        }
        
        header("Location: admin");
        
    }

    public function delete($id_pasta)
    {
        $adminmodel = new AdminModel();
        $pastas = $adminmodel->delete($id_pasta);
        $view = new AdminView();
        $view->AdminShowAll($harinas, $pastas);

        header("Location: ../../admin");
    }
    

}




