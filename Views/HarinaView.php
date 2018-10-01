<?php
require_once 'Models/HarinasModel.php';
require_once 'libs/Smarty.class.php';

    class HarinaView
    {
        private $basehref;


        public function __construct()
        {
            $this->basehref = '//' . $_SERVER['SERVER_NAME']
                . dirname($_SERVER['PHP_SELF']) . '/';
        }

        public function ShowAll($harinas){
            $smarty=new Smarty();
            $smarty->assign('tablaHarinas',$harinas);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/harinasTable.tpl');
        }
    }