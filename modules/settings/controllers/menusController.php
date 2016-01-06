<?php

class menusController extends settingsController
{
    protected $_menus;
    
    public function __construct() 
    {
        parent::__construct();
        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }

        $this->_menus = $this->loadModel('menus');
    }
    
    public function index()
    {
        $this->_view->assign('titulo', 'Menus');
        $this->_view->assign('menu_dbg', $this->_menus->getMenus());
        //$this->_view->assign('permisos_usuario', $this->permisos_usuario);
        $this->_view->renderizar('index', 'menus');
    }

    public function editar()
    {
        
        
        $this->_view->assign('titulo', 'Editar Menus');
        $this->_view->renderizar('editar', 'editar');
    }

    public function crear()
    {
       
        $this->_view->assign('titulo', 'Nuevo Menu');
        $this->_view->renderizar('crear', 'crear');
     }
    
}

?>
