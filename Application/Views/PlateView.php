<?php

class Application_Views_PlateView extends Application_Views_GeneralView
{
    public static $content = '';
    public static $dataPlate = '';
    
    public function listPlate($data){
        
        $content = '';
        $dataPlate = '';
        
        $i = 0;
        $countData = count($data);
        while($i < $countData){
             $dataPlate .= '</br><b>'.$data[$i][1].'</b>';
            $i++;
        }
        self::$dataPlate = $dataPlate;
        
         $array = array(1 => 'josé', 2 => 'mario', 3 => 400 );
         $content .= "</br>";
         $content .= "json con utf8 ".Class_Json::encodeArray($array, true, false);
         $content .= "</br>";
         $content .= "json sin utf8 ";
         $content .= json_encode($array);   
         
         self::$content = $content;
    }
    
}