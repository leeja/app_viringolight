<?PHP
/** 
 * @package app_viringolight
 * @author @joseleerazuri
 * @copyright by Jasoft Solutions <soporte@jasoftsolutions.com>
 * @version 1.0 
 */ 

/**
 * Se incluye las variables de configuración y el Framework  
 */ 
require_once ('Components/Config.conf');

Class_Performance::begin();
/**
 * Index
 * Clase Principal : heredar obligatoriamente de la clase Class_Controller
 * @package app_viringolight
 * @author @joseleerazuri
 * @copyright by Jasoft Solutions <soporte@jasoftsolutions.com>
 * @version 1.0
 * @access public
 */

class Index 
{
    public static function main()
    {        
        $front = Class_FrontController::getInstance();        
        $controller=$front->route();
    }    
}
Index::main();



Class_Performance::end();
