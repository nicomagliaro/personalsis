<?php

class editarController extends settingsController
{
    private $_registro;

    public function __construct() {
        parent::__construct();

        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }

        $this->_registro = $this->loadModel('menu');
        
    }

    public function index()
    {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->assign('titulo', 'Editar Menus');
        return;
    }
        
}

?>
