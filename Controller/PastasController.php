<?php
require_once 'Models/PastaModel.php';
require_once 'Views/PastaView.php';


class pastasController {
    public function showPastas (){
        $pastamodel = new PastaModel();
        $pastas = $pastamodel->getAll();
        $view = new PastaView();
        $view -> showPastas($pastas);

    }

}


?>