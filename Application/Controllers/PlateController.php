<?php

class Application_Controllers_PlateController
{
    
    public function __construct($action = ''){

		switch ($action) {
			case 'listAction':
                            $this->listPlate();
                            break;
			
			default:
				
                            break;
		}

	}
    
   public function listPlate(){
       
       $objModel = new Application_Models_PlateModel();
       $objView = new Application_Views_PlateView();
       $objView->listPlate($objModel->listPlate());
       
   }     
        
}
