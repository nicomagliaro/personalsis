<?php

class menuController extends settingsController
{
    private $_usuarios;
    
    public function __construct() 
    {
        parent::__construct();
        $this->_usuarios = $this->loadModel('menu');
    }
    
    public function index()
    {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
       
        $this->_view->assign('titulo', 'Menus');
        $this->_view->renderizar('index', 'index');
    }
    
   
}

?>
