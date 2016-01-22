<?php

class registroModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function verificarUsuario($usuario)
    {
        $id = $this->_db->query(
                "select id, codigo from usuarios where usuario = '$usuario'"
                );
        
        return $id->fetch();
    }
    
    public function verificarEmail($email)
    {
        $id = $this->_db->query(
                "select id from usuarios where email = '$email'"
                );
        
        if($id->fetch()){
            return true;
        }
        
        return false;
    }
    
    public function registrarUsuario($nombre, $usuario, $password, $email, $role)
    {
		
        try {

            $random = rand(1782598471, 9999999999);
            
            $this->_db->prepare(
                "INSERT INTO usuarios (id, nombre, usuario, pass, email, role, estado, fecha, codigo) ".
                "VALUES ".
                "(NULL, :nombre, :usuario, :password, :email, :role, 1, NOW(), :codigo)"
                )
                ->execute(
                    array(
                        ':nombre' => $nombre,
                        ':usuario' => $usuario,
                        ':password' => Hash::getHash('sha1', $password, HASH_KEY),
                        ':email' => $email,
                        ':role' => $role,
                        ':codigo' => (string)$random
                ));

        }
        catch(Exception $e){
            die("Un problema interno." . $e);

        }
    }

    /*

    INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `pass`, `email`, 
                            `role`, `estado`, `fecha`, `codigo`) 
                            VALUES (NULL, 'Test1', 'test1', 
                            'd1b254c9620425f582e27f0044be34bee087d8b4', 'test@test.com', '4',
                             '1', NOW(), '1000000000');

    */
    
    public function getUsuario($id, $codigo)
	{
		$usuario = $this->_db->query(
					"select * from usuarios where id = $id and codigo = '$codigo'"
					);
					
		return $usuario->fetch();
	}
	
	public function activarUsuario($id, $codigo)
	{
		$this->_db->query(
					"update usuarios set estado = 1 " .
					"where id = $id and codigo = '$codigo'"
					);
	}
}

?>
