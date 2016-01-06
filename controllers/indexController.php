<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->_view->assign('titulo', 'Bienvenido');
        $this->_view->renderizar('index', 'inicio');
        //$this->logg(1,1,false,false,false,5555);
    }
}

?>
