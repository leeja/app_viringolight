<?php

class Application_Models_PlateModel
{
    public function listPlate(){
        
         
        $mysqli = Class_DB_Mysqli::getInstance();
        
        $sql = 'call apptest_listplate()';
        
        $result = $mysqli->query($sql);
        
        $row = array();
        while($data = $result->fetch_array()) {
             $row[] = $data;
	}
        
        return $row;
        
    }
}