<?php

class editarController extends settingsController
{
    private $_menu;

    public function __construct() {
        parent::__construct();

        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }

        $this->_menu = $this->loadModel('menu');
        
    }

    public function index()
    {
        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }
        
        $this->_view->assign('titulo', 'Editar Menus');
        $this->_view->renderizar('menu', 'editar');
    }
        
}

?>
