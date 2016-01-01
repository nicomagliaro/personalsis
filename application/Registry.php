<?php

/*
 * -------------------------------------
 * Nicolas Magliaro - nicolasmagliaro@gmail.com
 * framework mvc basico
 * Registry.php
 * -------------------------------------
 */

class Registry
{
    private static $_instancia;
    private $_data;
    
    //no se puede instanciar la clase
    private function __construct() {}
    
    //singleton
    public static function getInstancia()
    {
        if(!self::$_instancia instanceof self){
            self::$_instancia = new Registry();
        }
        
        return self::$_instancia;
    }
    
    public function __set($name, $value) {
        $this->_data[$name] = $value;
    }
    
    public function __get($name) {
        if(isset($this->_data[$name])){
            return $this->_data[$name];
        }
        
        return false;
    }
}
?>
