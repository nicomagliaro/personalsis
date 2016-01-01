<?php

class lotesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }
    }

    public function index(){}
}


?>
