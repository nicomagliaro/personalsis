<?php

/*
 * -------------------------------------
 * Nicolas Magliaro
 * framework mvc basico
 * Controller.php
 * -------------------------------------
 */

class indexController extends lotesController
{
    public function __construct() {
        parent::__construct();

        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }
    }

    public function index() {
        $this->_view->assign('titulo', 'Catálogos');
        $this->_view->renderizar('index', 'indice_catalogo');
    }
}
