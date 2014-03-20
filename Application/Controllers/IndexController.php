<?php

class Application_Controllers_IndexController
{
    
    public function __construct($action) {
        
        switch ($action) {
            

            default:
                $this->showIndex();
                break;
        }
    
    }
    
    public function showIndex(){
        
        $objViewIndex = new Application_Views_IndexView();
        $objViewIndex->showIndex();
        
    }
    
}
