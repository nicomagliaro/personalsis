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
        $this->_view->assign('titulo', 'Nuevo Menu');
        

        if($this->getInt('enviar') == 1){
            $this->_view->assign('datos', $_POST);


            if(!$this->getSql('id')){
                $this->_view->assign('_warning', 'Debe introducir menu id');
                $this->_view->assign('mtipo', $this->_menus->getMenuType());
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->assign('titulo', 'Nuevo Menu');
                $this->_view->renderizar('crear', 'crear');
                exit;
            }else{
                $id = FormValidator::sanatizeItem($this->getSql('id'), 'string');
            }

            if(!$this->getSql('nombre')){
                $this->_view->assign('_warning', 'Debe introducir un nombre');
                $this->_view->assign('mtipo', $this->_menus->getMenuType());
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->assign('titulo', 'Nuevo Menu');
                $this->_view->renderizar('crear', 'crear');
                exit;
            }else{
                $nombre = FormValidator::sanatizeItem($this->getSql('nombre'), 'string');
            }

            if(!$this->getSql('enlace')){
                $this->_view->assign('_warning', 'Debe introducir un enlace valido');
                $this->_view->assign('mtipo', $this->_menus->getMenuType());
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->assign('titulo', 'Nuevo Menu');
                $this->_view->renderizar('crear', 'crear');
                exit;
            }else{
                $enlace = FormValidator::sanatizeItem($this->getSql('enlace'), 'url');
            }

            if(!$this->getSql('icono')){
                $this->_view->assign('_warning', 'Debe introducir un graphicon');
                $this->_view->assign('mtipo', $this->_menus->getMenuType());
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->assign('titulo', 'Nuevo Menu');
                $this->_view->renderizar('crear', 'crear');
                exit;
            }else{
                $image = FormValidator::sanatizeItem($this->getSql('icono'), 'string');
            }

            if($this->getInt('mtipo') == 0) {
                $this->_view->assign('_warning', 'Debe seleccionar un tipo de menú');
                $this->_view->assign('mtipo', $this->_menus->getMenuType());
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->assign('titulo', 'Nuevo Menu');
                $this->_view->renderizar('crear', 'crear');
                exit;
            }elseif ($this->getInt('mtipo') > 0 or $this->getInt('mtipo') < count($this->_menus->getMenuType())){
                $mtipo = FormValidator::sanatizeItem($this->getInt('mtipo'), 'int');
            }
            
            if($this->getSql('enable_menu') !== 'Yes') {
                
                $enable_m = 0;
            }elseif(!$this->getSql('enable_menu')){
                $enable_m = 0;
            }else{
                $enable_m = 1;
            }

            if($this->getSql('auth') == "Yes"){

                $auth = 1;

                if($this->getInt('acceso') == 0) {
                    $this->_view->assign('_warning', 'Debe seleccionar un nivel de acceso');
                    $this->_view->assign('mtipo', $this->_menus->getMenuType());
                    $this->_view->assign('roles', $this->_roles->listarRoles());
                    $this->_view->assign('titulo', 'Nuevo Menu');
                    $this->_view->renderizar('crear', 'crear');
                    exit;
                }elseif ($this->getInt('acceso') > 0 or $this->getInt('acceso') < count($this->_roles->listarRoles())){
                    $acceso = FormValidator::sanatizeItem($this->getInt('acceso'), 'int');
                }
            }else{

                    $auth = 0;
                    $acceso = count($this->_roles->listarRoles());
            }

            if(count($this->_menus->checkMenuId($id, $mtipo)) > 1) {
                $this->_view->assign('_warning', 'El Id de Menú ya existe en la BBDD');
                $this->_view->assign('mtipo', $this->_menus->getMenuType());
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->assign('titulo', 'Nuevo Menu');
                $this->_view->renderizar('crear', 'crear');
                exit;
            }

            $this->_menus->crearMenu(
                                        $id,
                                        $nombre,
                                        $enlace,
                                        $image,
                                        $auth,
                                        $acceso,
                                        $mtipo,
                                        $enable_m
                                        
                                    );
            
            $this->_view->assign('datos', false);
            $this->_view->assign('_success', 'Nuevo menu ha sido creado con exito');

        }
        $this->_view->assign('mtipo', $this->_menus->getMenuType());
        $this->_view->assign('acceso', $this->_roles->listarRoles());
        $this->_view->renderizar('crear', 'crear');    
     }
}

?>
