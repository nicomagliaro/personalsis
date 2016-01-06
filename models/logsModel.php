<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logsModel
 *
 * @author nico
 */
class logsModel extends Model
{
    //put your code here

    public function __construct() {
        parent::__construct();
    }
        
    public function addLog($msg,$user,$ip,$priority,$class,$url,$errorcode)
    {

        try{
            $id = $this->_db->prepare('INSERT INTO log VALUES (null, :msg, :user, :timestamp, :ip, :priority, :class, :url, :errorcode)')
            ->execute(
                    array(
                       ':msg' => $msg,
                       ':user' => $user,
                       ':timestamp' => date("Y-m-d H:i:s"),
                       ':ip' => $ip,
                       ':priority' => $priority,                            
                       ':class' => $class,
                       ':url' => $url, 
                       ':errorcode' => $errorcode
                    ));
        }catch(PDOException $e) {
            throw new Exception('Ha ocurrido el siguiente error: '.$e);
        }

        if($id){
                return true;
        }else{
                return false;
        }
    }
    public function error($msg){
            echo '<tr>';
            echo '<td colspan="6">'.$msg.'</td>';
            echo '</tr>';
    }
    
}
