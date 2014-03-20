<?php

class Application_Views_GeneralView
{
    private $_view;
    //public static $content;
    
    public function __construct($view = 'Web') {
        $this->_view = $view;
    }
    
    public function __destruct() {
        if(isset($this->_view)){
            include_once 'Application/Views/Templates/Web.tpl.php';
        }
    }
    
}
