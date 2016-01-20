<?php

class crearController extends settingsController
{
    protected $_menu;
    
    public function __construct()
    {
        parent::__construct();
        $this->_menu = $this->loadModel('menu');
    }
    
    public function index()
    {
        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
            $this->_view->assign('menu_dbg', $this->_menus->crearMenus());
        }
       
        $this->_view->assign('titulo', 'Nuevo Menu');
        $this->_view->renderizar('crear', 'crear');
     }

        
}

?>
