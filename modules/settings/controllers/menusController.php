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
        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
            
        }
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
        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
            
        }
        $this->_view->setJs(array('menu_actions'));
        $this->_view->assign('acceso', $this->_roles->listarRoles());
        $this->_view->assign('titulo', 'Nuevo Menu');
        $this->_view->renderizar('crear', 'crear');

        if($this->getInt('enviar') == 1){
            $this->_view->assign('datos', $_POST);

            print_r($_POST);exit;    

            //$this->_view->assign('menu_dbg', $this->_menus->crearMenus());
        


        }    
     }
    
}

?>
