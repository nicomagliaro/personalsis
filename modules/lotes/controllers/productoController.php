<?php

/*
 * -------------------------------------
 * Nicolas Magliaro
 * framework mvc basico
 * Controller.php
 * -------------------------------------
 */

class productoController extends lotesController
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
        $this->_view->setJs(array('producto'));
        $this->_view->assign('titulo', 'Productos');
        $this->_view->renderizar('index', 'producto');
    }

    public function crearProducto($param) {
        return;
    }

    public function modificarProducto($param) {
        return;
    }

    public function listarProducto($param) {
        return;
    }

    public function listarProductos($param) {
        return;
    }
}

?>
