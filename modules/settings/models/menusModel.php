<?php

class menusModel extends Model
{
    
    public function __construct()
    {
        parent::__construct();
         $this->acl = new ACL(Session::get('id_usuario'));
    }
    
   public function getMenus()
    {
        
        $menus = $this->_db->prepare(
                "SELECT id, menu_name,enlace,imagen ". 
                "FROM menu ". 
                "WHERE enable = 1 ".
                "AND acl_permission >= ?"
                );
        $menus->execute(
                        array(
                            $this->acl->getRole(Session::get('id_usuario'))
                            )
        );
        
        return $menus->fetchAll(PDO::FETCH_ASSOC);
        
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
        return $acl->getPermisos();
    }

    public function getSubmenu()
    {
        return;
    }

}

?>
