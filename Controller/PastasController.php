<?php
require_once 'Models/PastaModel.php';
require_once 'Views/PastaView.php';


class pastasController {
    public function showAll (){
        $pastamodel = new PastaModel();
        $pastas = $pastamodel->getAll();
        $view = new PastaView();
        $view -> showAll($pastas);

    }
    
    public function addPasta(){
        if (isset($_POST["pasta"])) {
            $pasta=$_POST["pasta"];
            $model=new PastaModel();
            $model->addPasta($pasta);
        }
        header("Location: ver");
        
    }
    public function AdminShow()
    {
        $pastamodel = new PastaModel();
        $pastas = $pastamodel->getAll();
        $view = new PastaView();
        $view->AdminShow($pastas);

    }

}




?>