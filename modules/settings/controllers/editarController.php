<?php

class editarController extends settingsController
{
    protected $_menu;

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
        $this->_view->assign('menu_dbg', $this->_menus->editarMenus());
        $this->_view->assign('titulo', 'Editar Menu');
        $this->_view->renderizar('editar', 'editar');
    }
        
}

?>
