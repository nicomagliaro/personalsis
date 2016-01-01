
<?php

/*
 * -------------------------------------
 * Nicolas Magliaro
 * framework mvc basico
 * Controller.php
 * -------------------------------------
 */

class catalogoController extends lotesController
{
    public function __construct() {
        parent::__construct();

        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }

        $this->_view->setJsPlugin(array('dataTables'));
        $this->_view->setCssPlugin(array('dataTables'));
    }

    public function index()
    {
        $this->_view->setJs(array('catalogo'));
        $this->_view->assign('titulo', 'Catálogos');
        $this->_view->renderizar('index', 'catalogo');
    }

    public function crearCatalogo($param) {
        return;
    }

    public function modificarCatalogo($param) {
        return;
    }

    public function listarCatalogo($param) {
        return;
    }

    public function listarCatalogos($param) {
        return;
    }
}

?>
