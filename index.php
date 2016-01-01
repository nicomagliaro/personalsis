<?php

ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);
define('TIMEZONE', 'Europe/Madrid');

try{
    require_once APP_PATH . 'Autoload.php';
    require_once APP_PATH . 'Config.php';
    
    /* Configurar parametros de hora del sistema */
    date_default_timezone_set(TIMEZONE);
    
    Session::init();
    
    $registry = Registry::getInstancia();
    $registry->_request = new Request();
    $registry->_db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHAR);
    $registry->_acl = new ACL();

    Bootstrap::run($registry->_request);
}
catch(Exception $e){
    echo $e->getMessage();
}

?>