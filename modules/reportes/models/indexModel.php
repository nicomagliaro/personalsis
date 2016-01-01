<?php

class indexModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
   
    public function getReportList() {
        $row = $this->_db->query("SELECT * FROM reports");
        
        return $row->fetchAll();
    }
    
    public function getReportByNum($id) {
        $id = (int) $id;
        $row = $this->_db->query("SELECT tipo.tipo,mesa.exp_caracteristica,mesa.tipo_num,mesa.year, "
                            ."mov.fecha_mov,mov.recibido,mov.remitido,mov.referente,mov.detalle "
                            ."FROM seguimiento_mesa mesa, seguimiento_mov mov, seguimiento_tipo tipo "
                            ."WHERE mesa.id = $id " 
                            ."AND mesa.id = mov.fk_id_mesa_num "
                            ."AND tipo.id = mesa.fk_id_tipo " 
                            ."ORDER BY mov.fecha_mov DESC");
        
        return $row->fetchAll(PDO::FETCH_ASSOC);
        
    }
    
    public function getEntradaByDate($id) {
        $query = "SELECT tipo.tipo,mesa.exp_caracteristica,mesa.alcance,mesa.tipo_num,mesa.year,mov.referente,mov.fecha_mov,mov.detalle " 
                  ."FROM seguimiento_tipo tipo,seguimiento_mesa mesa,seguimiento_mov mov "
                  ."WHERE "
                  ."DATE_FORMAT( mov.fecha_mov,'%d-%m-%Y' ) = :date "
                  ."AND mov.fk_id_tipo = tipo.id "
                  ."AND mesa.id = mov.fk_id_mesa_num "
                  ."GROUP BY mesa.tipo_num "
                  ."ORDER BY mov.fecha_mov";        
        try{ 
            $stmt = $this->_db->prepare($query);
            $stmt ->execute(array(
                              ':date' => $id
                            ));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result) or $result == false){
                return array();
            }else{
                return $result;
            }
        }catch(PDOException $e){
            
            die("Failed to run query: " . $e->getMessage());
          
        }
        
    }
    
    public function getSalidaByDate($id) {
        $query = "SELECT tipo.tipo,mesa.exp_caracteristica,mesa.alcance,mesa.tipo_num,mesa.year,mov.referente,mov.fecha_mov,mov.detalle " 
                  ."FROM seguimiento_tipo tipo,seguimiento_mesa mesa,seguimiento_mov mov "
                  ."WHERE "
                  ."DATE_FORMAT( mov.fecha_mov,'%d-%m-%Y' ) = :date "
                  ."AND mov.fk_id_tipo = tipo.id "
                  ."AND mesa.id = mov.fk_id_mesa_num "
                  ."GROUP BY mesa.tipo_num "
                  ."ORDER BY mov.fecha_mov";        
        try{ 
            $stmt = $this->_db->prepare($query);
            $stmt ->execute(array(
                              ':date' => $id
                            ));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result) or $result == false){
                return array();
            }else{
                return $result;
            }
        }catch(PDOException $e){
            
            die("Failed to run query: " . $e->getMessage());
          
        }
        
    }
    
    public function getRemitoLegajo($from,$to,$estado) {
        $query = "SELECT age.legajo,age.nombre,age.apellido,leg.estado " 
                  ."FROM legajos leg, agentes age "
                  ."WHERE "
                  ."DATE_FORMAT(leg.date, '%d-%m-%Y') >= :from "
                  ."AND "
                  ."DATE_FORMAT(leg.date, '%d-%m-%Y') <= :to "
                  ."AND leg.estado LIKE :estado "
                  ."GROUP BY age.legajo "
                  ."AND leg.fk_legajo = age.legajo "
                  ."ORDER BY age.apellido ASC";        
        try{ 
            $stmt = $this->_db->prepare($query);
            $stmt ->execute(array(
                              ':from' => $from,
                              ':to' => $to,
                              ':estado' => '%'.$estado.'%'
                            ));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result) or $result == false){
                return array();
            }else{
                return $result;
            }
        }catch(PDOException $e){
            
            die("Failed to run query: " . $e->getMessage());
          
        }
    }
}

?>
