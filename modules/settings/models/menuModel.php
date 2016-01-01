<?php

class menuModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getMenu()
    {
        $usuarios = $this->_db->query(
                "select u.*,r.role from usuarios u, roles r ".
                "where u.role = r.id_role"
                );
        return $usuarios->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function crearMenu($usuarioID)
    {
         $usuarios = $this->_db->query(
                "select u.usuario,r.role from usuarios u, roles r ".
                "where u.role = r.id_role and u.id = $usuarioID"
                );
        return $usuarios->fetch();
    }
    
    public function editarMenu($usuarioID)
    {
        $acl = new ACL($usuarioID);
        return $acl->getPermisos();
    }
    
}

?>
