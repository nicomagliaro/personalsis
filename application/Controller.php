<?php

/*
 * -------------------------------------
 * Nicolas Magliaro - nicolasmagliaro@gmail.com
 * framework mvc basico
 * Controller.php
 * -------------------------------------
 */
include  LOG_LIB;

abstract class Controller
{
    private $_registry; 
    private $_Log;
    protected $_view;
    protected $_acl;
    protected $_request;
    protected $_menu;
    protected $_ip;
    protected $_oemail;
    protected $_roles;
    
    public function __construct() 
    {
        $this->_registry = Registry::getInstancia();
        #$this->_menu = new menu(); Ex: $this->_view = new View(new Request, $this->_menu);
        $this->_acl = $this->_registry->_acl;
        $this->_request = $this->_registry->_request;
        $this->_view = new View($this->_request, $this->_acl);
        $this->_ip = new Env_ip();
        $this->_Log = new logsModel();
        $this->getLibrary(array('class.oemail', 'class.validators')); // Carga la libreria de validacion de email
        $this->_view->setJsPlugin(array('tooltip'));
        $this->_roles = new ACL;

    }
    
    abstract public function index();
    
    protected function loadModel($modelo, $modulo = false)
    {
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
        
        if(!$modulo){
            $modulo = $this->_request->getModulo();
        }
        
        if($modulo){
           if($modulo != 'default'){
               $rutaModelo = ROOT . 'modules' . DS . $modulo . DS . 'models' . DS . $modelo . '.php';
           } 
        }
        
        if(is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }
        else {
            throw new Exception('Error de modelo');
        }
    }
    
    protected function getLibrary(array $libreria)
    {
        if(is_array($libreria)){

            for($i=0;$i<sizeof($libreria);$i++){
             
                $lib_folder = explode('.',$libreria[$i]); 
                $rutaLibreria = ROOT . 'libs' . DS . $lib_folder[1] . DS . $libreria[$i] . '.php';
                
                if(is_readable($rutaLibreria)){
                    require_once $rutaLibreria;
                }
                else{
                    throw new Exception('Error de libreria');
                }
            }    
        }else{
            throw new Exception('Debe ingresar dato como tipo: array()');
        }
        
    }
    
    protected function getTexto($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
            return $_POST[$clave];
        }
        
        return '';
    }
    
    protected function getInt($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }
        
        return 0;
    }
    
    protected function redireccionar($ruta = false)
    {
        if($ruta){
            header('location:' . BASE_URL . $ruta);
            exit;
        }
        else{
            header('location:' . BASE_URL);
            exit;
        }
    }

    protected function validarEmail($str)
    {
        $this->_oemail = new Email;
        if($this->_oemail->valida($str)){
            return $str;
        }
        else{
            return 0;
        }
    }

    protected function filtrarInt($int)
    {
        $int = (int) $int;
        
        if(is_int($int)){
            return $int;
        }
        else{
            return 0;
        }
    }
    
    protected function getPostParam($clave)
    {
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }
    
    protected function getSql($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = strip_tags($_POST[$clave]);
            
            if(!get_magic_quotes_gpc()){
                $_POST[$clave] = mysql_real_escape_string($_POST[$clave], mysql_connect(DB_HOST, DB_USER, DB_PASS));
            }
            
            return trim($_POST[$clave]);
        }
    }
    
    protected function getAlphaNum($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
        }
        
    }
    
    public function validarEmail_Old($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        
        return true;
    }
    
    protected function formatPermiso($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z_]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
        }
        
    }


    protected function getParam($clave)
    {
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }
}

?>
