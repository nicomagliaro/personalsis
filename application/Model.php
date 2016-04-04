<?php

/*
 * -------------------------------------
 * Nicolas Magliaro - nicolasmagliaro@gmail.com
 * framework mvc basico
 * Model.php
 * -------------------------------------
 */


class Model
{
    private $_registry;
    protected $_db;
    
    public function __construct() {
        $this->_registry = Registry::getInstancia();
        $this->_db = $this->_registry->_db;
    }


    public function getRoles()
    {
        $roles = $this->_db->query(
                "select id_role, role from roles"
                );
        return $roles->fetchAll();
    }
}

?>
