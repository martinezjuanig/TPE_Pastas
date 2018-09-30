<?php
require_once 'Models/AdminModel.php';
require_once 'Views/adminView.php';

class AdminController
{
    public function AdminMenu()
    {
        $adminmodel=new AdminModel();
        $pastas=$adminmodel->getAll();
        $view=new AdminView();
        $view->AdminShowAll($pastas);
    }

    public function delete($id_pasta)
    {
        $adminmodel=new AdminModel();
        $pastas->delete($id_pasta);
        $view=new AdminView();
        $view->AdminShowAll($pastas);
    }
    
    public function savePasta()
    {
        if ((isset($_POST['pasta'])) && (isset($_POST['harina']))) 
        {
            $name=$_POST['pasta'];
            $model=new AdminModel();
            $model->savePasta($name);
            
            $type=$_POST['harina'];
            $model= new AdminModel();
            $model->saveHarina($type);
        }
    }
}
