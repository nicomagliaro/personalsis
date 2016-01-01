<?php

class crearController extends settingsController
{
    private $_login;
    
    public function __construct()
    {
        parent::__construct();
        $this->_login = $this->loadModel('menu');
    }
    
    public function index()
    {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        
        $this->_view->assign('titulo', 'Nuevo Menu');
        return;
     }   
}

?>
