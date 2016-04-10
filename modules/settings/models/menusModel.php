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
    
    public function editarMenu($usuarioID)
    {
        return $acl->getPermisos();
    }

    public function getSubmenu()
    {
        return;
    }

    public function getMenuType()
    {
        $mtype = $this->_db->query(
                "select * from menu_type"
                );
                
        return $mtype->fetchAll();
    }

    public function checkMenuId($id, $mtype)
    {
        $stmt = $this->_db->query(
                "SELECT idmenu FROM menu WHERE id = '$id' AND fk_menu_type = $mtype"
                );
        return $stmt->fetch();
    }

    public function crearMenu($id,$menu,$enlace,$imagen,$auth,$acceso,$mtipo,$enable) {

        $query = "INSERT INTO menu (id, menu_name, enlace, divider, imagen, autenticado, acl_permission, fk_menu_type, enable) ".
                    "VALUES ".
                    "(:id, :menu_name, :enlace, 0, :imagen, :auth, :acl_permission, :mtipo, :enable)";  
        try{ 
            $this->_db->beginTransaction();
            $stmt = $this->_db->prepare($query);
            $stmt->execute(array(
                              ':id' => $id,
                              ':menu_name' => $menu,
                              ':enlace' => $enlace,
                              ':imagen' => $imagen,
                              ':auth' => $auth,
                              ':acl_permission' => $acceso,
                              ':mtipo' => $mtipo,
                              ':enable' => $enable

                            ));
            $this->_db->commit();
        }catch(PDOException $e){
            
            try{ $stmt->rollBack(); }catch(PDOException $e2){
                die("Failed to run query: " . $e2->getMessage());
            }
        }
    }

}

?>
