<?php

class Application_Views_PlateView
{
    
    public function listPlate($data){
        
        $i = 0;
        $countData = count($data);
        
        while($i < $countData){
            
            echo '</br><b>'.$data[$i][1].'</b>';
            
            $i++;
        }
        
    }
    
}