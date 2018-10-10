<?php
    require_once 'Models/PastasModel.php'; 
    require_once "libs/Smarty.class.php";

    class PastaView{

        private $basehref;
        public function __construct()
        {
        $this->basehref = '//' . $_SERVER['SERVER_NAME']
            . dirname($_SERVER['PHP_SELF']) . '/'; 
        }

        public function showAll($pastas)
        {
            $smarty = new Smarty();
            $smarty->assign('tablaPastas',$pastas);
            $smarty->assign('basehref',$this->basehref); 
            $smarty->display('templates/pastasTable.tpl');
           
        }

        public function showOne($pasta)
        {
            $smarty = new Smarty();
            $smarty->assign('pasta', $pasta);
            $smarty->assign('basehref', $this->basehref);
            $smarty->display('templates/onePasta.tpl');
        }

        

    }
