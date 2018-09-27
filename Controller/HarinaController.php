<?php
 require_once 'Models/HarinaModel.php';
 require_once 'Views/HarinaView.php';
 require_once 'Views/HomeView.php';



class HarinasController
{
    public function showAllHarinas()
    {   $view=new ViewHome();
        $view->showHome();
        $harinamodel = new HarinasModel();
        $harinas = $harinamodel->getAllHarinas();
        $view = new HarinaView();
        $view->showAll($harinas);

    }

    public function addHarina()
    {
        if (isset($_POST["pasta"])) {
            $pasta = $_POST["pasta"];
            $model = new PastaModel();
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
