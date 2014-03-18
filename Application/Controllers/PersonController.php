<?PHP

class Application_Controllers_PersonController
{

	public function __construct($action = ''){

		switch ($action) {
			case 'value':
				# code...
				break;
			
			default:
				$this->welcomePerson();
				break;
		}

	}



	public function welcomePerson(){

		$objModel = new Application_Models_PersonModel();
		$name = $objModel->getName();

		$objView = new Application_Views_PersonView();
		echo $objView->getWelcomePerson($name);

	}

}
