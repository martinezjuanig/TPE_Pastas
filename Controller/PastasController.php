<?php
require_once 'Models/PastaModel.php';
require_once 'Views/PastaView.php';
require_once 'Views/HomeView.php';



class PastasController {
    public function showAll (){
        $view=new ViewHome();
        $view->showHome();
        $pastamodel = new PastaModel();
        $pastas = $pastamodel->getAllPastas();
        $view = new PastaView();
        $view->showAll($pastas);

    }
    
    public function addPasta(){
        if (isset($_POST["pasta"])) {
            $pasta=$_POST["pasta"];
            $model=new PastaModel();
            $model->addPasta($pasta, $fk_harina);
        }
        header("Location: ver");
        
    }
    public function AdminShow()
    {
        $pastamodel = new PastaModel();
        $pastas = $pastamodel->getAll();
        $view = new PastaView();
        $harinas = ["hola", "d"];
        $view->AdminShow($pastas, $harinas);

    }

}




